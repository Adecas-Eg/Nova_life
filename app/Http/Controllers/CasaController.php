<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCasa;
use App\Models\Casa;
use App\Models\Category;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;

// si no selen las imagers configurar app

class CasaController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:casa.index')->only('index');
        $this->middleware('can:casa.create')->only('create');
        $this->middleware('can:casa.store')->only('store');
        $this->middleware('can:casa.edit')->only('edit');
        $this->middleware('can:casa.update')->only('update');
        $this->middleware('can:casa.administer')->only('administer');
        $this->middleware('can:casa.change_status')->only('casa.change_status');


    }




    public function home()
    {

        if (Auth()->user() == null) {
            return view('casas.home_guest');
        } else {
            return view('casas.home');
        }
    }


    public function index(Request $request)
    {
        $buscar = $request->buscar;
        //buscar en array
        $resultados = Casa::whereIn('tipo_inmueble', ['apartamento'])->get();
        $casas = Casa::with(['media'])
            ->whereRaw("LOWER(ciudad) LIKE ?", ['%' . strtolower($buscar) . '%'])
            ->where('status', '=', '1')
            ->orderBy('id')
            ->paginate(4);
        // return $resultados;
        return view('casas.index', compact('casas', 'buscar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('casas.create');
    }



    public function store(StoreCasa $request)
    {
        $geometry = (Object) json_decode($request->geometry);

        if (request()->hasFile('imagenes') && $geometry) {
            $casa = Casa::create($request->validated());
            //logica de multiples imagens con librerias
            $casa->user_id = auth()->user()->id;
            $casa->status = 1;
            $casa->latitud = $geometry->latitud;
            $casa->longitud = $geometry->longitud;
            $casa->save();
            $casa->addMultipleMediaFromRequest(['imagenes'])
                ->each(function ($fileAdder) {
                    $fileAdder->toMediaCollection('casas');
                });
            return redirect()->route('casa.administer')->with('info', 'Inmueble creado exitosamente');
        }
        return back()->with('error', 'Campo imagen debe ser obligatorio');
        //back se usa para regresar a la pagina anterior
    }

    public function show(Casa $casa)
    {
        $comments = Comment::get()->where('casa_id', $casa->id);
        $casa->with(['media'])->find($casa->id);
        if (!empty($comments)) {
            $user = User::find($casa->user_id);
            return view('casas.show', compact('casa', 'comments', 'user'));

        }
        return view('casas.show', compact('casa'));

    }

    public function edit(Casa $casa)
    {

        return view('casas.edit', compact('casa'));
    }


    public function update(StoreCasa $request, Casa $casa)
    {
        $casa->update($request->validated());
        if (request()->hasFile('imagenes')) {
            $casa->clearMediaCollection('casas');
            $casa->addMultipleMediaFromRequest(['imagenes'])
                ->each(function ($fileAdder) {
                    $fileAdder->toMediaCollection('casas');
                });
        }
        return redirect()->route('casa.administer')->with('info', 'inmueble modificado exitosamente');
    }



    public function administer()
    {

        $user = User::find(auth()->user()->id);
        $casas1 = $user->casas->sortByDesc('id');
        foreach ($casas1 as $casa) {
            ($casas[] = $casa->with(['media'])->find($casa->id));
        }

        if (empty($casas)) {
            return view('casas.administer');
        } else {
            return view('casas.administer', compact('casas'));
        }
    }


    public function change_status(Casa $casa)
    {
        if ($casa->status == 1) {
            $casa->update(['status' => 2]);
            return redirect()->back();
        } else {
            $casa->update(['status' => 1]);
            return redirect()->back();
        }
    }


    public function category(Request $request)
    {
        $tags = [];
        if ($search = $request->name) {
            $tags = Category::where('tittle' . 'LIKE', "%$search%")->get();
        }
        return response()->json($tags);
    }
}
