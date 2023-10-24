@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @auth
        @include('layouts.navbars.auth.topnav', ['title' => 'Administrar Casas'])

        <div class="container-fluid py-4 text-center
        ">
            <div class="row">
                <div class="col-md-10">
                    <div class="card">

                            <p>
                                Términos y condiciones

                                Cláusulas de uso de portal WWW.NOVALIFE.COM.CO (Web, móvil, aplicaciones IOS y android)


                                NOVALIFE.COM.CO de propiedad de EDITORA URBANA LTDA, pretende dar a los usuarios seguridad en
                                cuanto al empleo
                                de
                                la información que aparece en la misma, así como la que se desee ingresar a la base de datos. De
                                igual manera,
                                facilitar a los usuarios el acceso a los datos en su portal web, móvil y/o aplicaciones (Android
                                e IOS).


                                La finalidad primordial de la página en cuestión es poner en conocimiento de los interesados,
                                las ofertas,
                                promociones y demandas de empleo o de adquisición de bienes que terceros publicitan, así como la
                                promoción y
                                divulgación de contenidos comerciales a través de las plataformas o bases de datos generadas a
                                través de ellas.


                                NOVALIFE.COM.CO, actúa como portal web, móvil y aplicaciones (Android e IOS) de información o
                                publicidad, no
                                generándose por ello, oferta comercial o contractual entre NOVALIFE.COM.CO y el usuario.


                                El usuario entonces contratará únicamente con las empresas o personas naturales enlazadas, sin
                                que exista
                                relación
                                contractual o de intermediación por parte de EDITORA URBANA LTDA. En todo caso, siempre que el
                                usuario pulse un
                                enlace se entenderá que utiliza el portal web, móvil y aplicaciones (Android e IOS) de la
                                empresa enlazada,
                                dejando
                                de utilizar el portal web, móvil y/o aplicaciones (Android e IOS) de NOVALIFE.COM.CO, no podrá
                                el usuario
                                alegar
                                confusión respecto de la marca o empresa con la cual el usuario ha contratado finalmente. La
                                contratación
                                siempre
                                será entre el usuario y la empresa enlazada.


                                Al aceptar los términos y condiciones el usuario acepta que EDITORA URBANA LTDA le envíe a sus
                                datos de contacto
                                información sobre otros productos o servicios relacionados con su actividad dentro del portal
                                NOVALIFE.COM.CO;
                                como
                                pueden ser inmuebles que tengan características similares a las de su búsqueda inicial.


                                DEFINICIONES:

                                USUARIO PERSONA NATURAL: Todo usuario del portal NOVALIFE.COM.CO, que sea personal natural,
                                mayor de edad, que
                                no
                                ostente la calidad de comerciante o intermediario en el mercado y que use los servicios del
                                portal para
                                satisfacer
                                necesidades de orden personal, en particular la publicación o anuncio de inmuebles usados ya sea
                                con servicios
                                gratuitos o pago a través de la Oficina Virtual.

                                USUARIO AGENTE INTERMEDIARIO Y EMPRENDEDORES: Todo usuario del portal, bien sea persona natural
                                o jurídica, que
                                ostenta la calidad de comerciante o intermediario en el mercado y que utiliza los servicios del
                                portal en
                                desarrollo
                                de su actividad económica en relación con inmuebles usados. Este tipo de usuario podrá utilizar
                                los servicios
                                del
                                portal exclusivamente a través de la Oficina Virtual.

                                USUARIO CONSTRUCTORA: Todo usuario del portal, que sea persona jurídica y cuyo objeto social
                                incluya las
                                actividades
                                relacionadas con la construcción y/o promoción de proyectos inmobiliarios nuevos. Este tipo de
                                usuario podrá
                                utilizar los servicios del portal exclusivamente a través de la Oficina Virtual.

                                OTRO TIPO DE USUARIO INSTITUCIONAL: Usuarios que sean personas jurídicas y cuyo objeto social no
                                incluya las
                                actividades relacionadas con la construcción y/o promoción de proyectos inmobiliarios, o la
                                intermediación como
                                agentes inmobiliarios; pero que para el desarrollo de su objeto social requieren publicar o
                                anunciar bienes
                                inmuebles usados. Este tipo de usuario podrá utilizar los servicios del portal exclusivamente a
                                través de la
                                Oficina
                                Virtual.

                                DERECHOS Y OBLIGACIONES DE LAS PARTES:

                                Por parte de NOVALIFE.COM.CO
                                Son obligaciones asumidas por el propietario del portal web-móvil y aplicaciones (Android e
                                IOS), en su calidad
                                de
                                proveedor:


                                Prestar los servicios suscritos, respondiendo por las reclamaciones que por deficiencia en el
                                servicio realicen
                                los
                                clientes.

                                Garantizar el secreto de las comunicaciones, reservándose el derecho a rectificación de
                                informaciones falsas,
                                ilícitas, o que contravengan la moral y las buenas costumbres.

                                Respetar el derecho a la intimidad y privacidad del usuario.

                                Adecuar continuamente su portal web- móvil y aplicaciones (Android e IOS), con miras a prestar
                                un eficiente
                                servicio, sin embargo, podrá en cualquier momento y sin previo aviso, suspender temporalmente la
                                accesibilidad
                                al
                                portal web – móvil y aplicaciones (Android e IOS), para efectos de mantenimiento, reparación,
                                actualización o
                                mejora
                                de los servicios, o modificaciones necesarias para el buen cumplimiento de sus obligaciones.

                                NOVALIFE.COM.CO, no alojará material pornográfico, imágenes o videos, cuando existan indicios,
                                de que las
                                personas
                                fotografiadas o filmadas sean menores de edad.

                                Responder por los servicios propios e información originada directamente por la misma, además
                                por el uso de
                                marcas,
                                emblemas, nombres o enseñas comerciales, que sean de su propiedad exclusiva.

                                Velar por que la información que provenga del cliente, catalogada como estrictamente personal,
                                sea guardada por
                                la
                                empresa con absoluta confidencialidad, garantizando los derechos de acceso, rectificación y
                                cancelación de los
                                datos
                                personales a instancias del interesado y bajo sus directas instrucciones.

                                Velar porque los contenidos del portal web- móvil y aplicaciones (Android e IOS), no tengan
                                carácter
                                pornográfico,
                                xenófobo, discriminatorio, racista, difamatorio o que de cualquier modo fomenten la violencia.

                                Procurar por un uso legal del portal web – móvil y aplicaciones (Android e IOS), evitando
                                cualquier clase de
                                actuaciones que resulten claramente violatorias de los derechos de los usuarios.

                                NOVALIFE.COM.CO, se reserva el derecho de excluir a los usuarios que contravengan con su
                                conducta las
                                obligaciones
                                antes establecidas, así como cancelar la suscripción o servicios, en este caso, podrá proceder
                                inmediatamente,
                                sin
                                que haya lugar a requerimiento o notificación alguna al usuario infractor.

                                Por parte del CLIENTE O USUARIO:
                                Son obligaciones asumidas por el usuario al utilizar el portal web:


                                Realizar un uso lícito de los servicios absteniéndose de efectuar acciones que provoquen daño o
                                alteración en
                                los
                                contenidos y los datos de otros usuarios y/o de terceras personas, bajo pena de ser excluido del
                                acceso a la
                                misma.

                                No incluir contenidos pornográficos, imágenes o videos, en donde se observe el uso de menores de
                                edad, o
                                simplemente
                                puedan ser catalogados como contrarios a las buenas costumbres o a la ley.

                                Pretender que sea publicada información falsa o caduca, que contravengan derechos tan
                                fundamentales, como la
                                integridad, la moral, el honor, o la intimidad personal. Así como aquellos que contengan
                                información o mensajes
                                violentos, degradantes o racistas.

                                Abstenerse de introducir virus informáticos que puedan afectar al portal web – móvil y
                                aplicaciones (Android e
                                IOS)
                                de NOVALIFE.COM.CO, o que puedan dañar e-mails de terceros cuya información se haya obtenido a
                                través de un
                                aviso
                                publicado por EDITORA URBANA LTDA.

                                Garantizar que ninguna de las piezas, imágenes, textos, fotos, videos publicados en
                                WWW.NOVALIFE.COM.CO en su
                                portal web-móvil y aplicaciones (Android e IOS), afecta derechos de terceros, así sean
                                trabajadores o
                                contratistas
                                del mismo cliente. Asimismo, EL CLIENTE garantiza que la información, las piezas, fotos, videos
                                a publicar no
                                constituyen publicidad engañosa o actos de competencia desleal. En cualquier caso, EL CLIENTE
                                mantendrá indemne
                                a
                                EDITORA URBANA LTDA ante cualquier reclamo por usos no autorizados de materiales como obras,
                                programas de
                                computador, marcas o ante el reclamo de consumidores o competidores afectados por la calidad
                                objetiva, la
                                veracidad,
                                la actualidad o la idoneidad de los contenidos publicados.

                                Asumir las consecuencias legales a que den lugar sus publicaciones en WWW.NOVALIFE.COM.CO (en su
                                portal
                                web-móvil
                                y/o aplicaciones Android e IOS), generando de esta forma publicidad engañosa al consumidor
                                final;
                                constituyéndose en
                                el responsable directo por las reclamaciones y/o demandas relacionadas y garantizando mantener
                                indemne a EDITORA
                                URBANA LTDA ante las mismas.

                                EL CLIENTE reconoce su deber de informarse sobre cada uno de los productos y/o servicios que
                                adquiere a través
                                de
                                los portales y/o plataformas de EDITORA URBANA LTDA; motivo por el cual deberá considerar en
                                detalle las
                                descripciones, publicidad, condiciones aplicables a cada servicio y/o producto.

                                Conocer y cumplir las políticas de publicación que le sean aplicables de acuerdo a estos mismos
                                términos y
                                condiciones.

                                El incumplimiento de las obligaciones por parte del CLIENTE dará lugar a la no prestación del
                                servicio de forma
                                justificada por parte de EDITORA URBANA LTDA. Quien mantendrá en todo momento la facultad de
                                resolver el
                                contrato y
                                exigir las indemnizaciones correspondientes o forzar el cumplimiento del mismo.

                                El derecho de retracto está regulado por la ley de consumo vigente en Colombia en cuanto a sus
                                efectos y plazos.
                                No
                                obstante lo anterior, el ejercicio de tal derecho conlleva necesariamente la consideración de
                                los gastos
                                administrativos, financieros, comerciales o de cualquier tipo en los que efectiva y
                                justificadamente haya
                                incurrido
                                EDITORA URBANA LTDA durante la relación comercial; los cuales serán tenidos en cuenta al momento
                                de realizar la
                                liquidación correspondiente.

                                El usuario reconoce y respeta la titularidad de NOVALIFE respecto de los programas de
                                computador, marcas,
                                nombres
                                comerciales, textos, dibujos, fotografías y, en general, todos los bienes inmateriales
                                protegidos por la
                                propiedad
                                intelectual utilizados en NOVALIFE. Igualmente reconoce que el uso de los servicios de FINCARAÍZ
                                no le otorga
                                licencia, cesión o autorización alguna respecto de estos bienes, de forma que todo uso del
                                software, marcas y
                                nombres de FINCARAÍZ, entre otros, deberá contar con autorización previa y expresa por parte del
                                titular del
                                derecho.

                                El usuario acepta que al pulsar en los enlaces (links), que lo conecten a webs de terceras
                                empresas o personas
                                naturales, deja de navegar en FINCARAÍZ, exonerando a la misma de cualquier responsabilidad,
                                daño o perjuicio
                                derivado de su relación con las terceras empresas o personas. El usuario deja de navegar en
                                FINCARAÍZ, cuando en
                                el
                                portal web – móvil y aplicaciones enlazadas no aparezca la marca FINCARAÍZ, cualquiera de sus
                                marcas, o el
                                nombre
                                comercial EDITORA URBANA LTDA y la dirección o nombre de dominio no tenga incluida la palabra
                                FINCARAÍZ o
                                EDITORA
                                URBANA.

                                Considerando que los servicios prestados constituyen obligaciones de medio y no de resultado, el
                                usuario exonera
                                de
                                toda responsabilidad a FINCARAÍZ por los resultados obtenidos al implementar los servicios.

                                Dar aviso oportuno a FINCARAÍZ sobre la violación o evasión de los términos y condiciones por
                                parte de cualquier
                                otro usuario. Dar aviso oportuno a FINCARAÍZ sobre la violación o evasión de los términos y
                                condiciones por
                                parte de
                                cualquier otro usuario.

                                PROTECCIÓN DE LA PROPIEDAD INTELECTUAL:

                                Se entiende por las dos partes comprometidas, NOVALIFE.COM.CO y el cliente, que el diseño,
                                imágenes, marcas,
                                bases
                                de datos, gráficos, frames, banners, software, distintos códigos, fuente , objeto, y en general
                                los demás
                                elementos
                                integradores del portal web – móvil y aplicaciones (Android e IOS), son de propiedad legítima de
                                NOVALIFE.COM.CO
                                y/o de EDITORA URBANA LTDA, quien posee legalmente los derechos exclusivos para la explotación y
                                uso de los
                                mismos.
                                Por lo anterior, el usuario que acceda al portal web – móvil y aplicaciones (Android e IOS), no
                                podrá imitarlos,
                                asimilarlos, transformarlos, registrarlos en ningún lugar o ante cualquier entidad, no podrá
                                tampoco,
                                reproducirlos,
                                distribuirlos, transmitirlos, publicitarlos, licenciarlos, cederlos o ejercer derechos de
                                titularidad,
                                directamente
                                o por intermedio de terceros, crear nuevos productos o servicios derivados de la información y
                                elementos
                                contenidos
                                en la página. Lo anterior también aplicará, para diseños, marcas, gráficos, imágenes, que
                                aparezcan en el portal
                                web, pertenecientes a empresas, entidades o personas naturales colaboradoras o contratantes con
                                EDITORA URBANA
                                LTDA,
                                salvo el consentimiento expreso de las mismas, el que en todo caso deberá constar por escrito.


                                PRODUCTOS Y SERVICIOS DE TERCERAS PERSONAS:

                                El usuario acepta que al pulsar en los enlaces (links), que lo conecten a webs de terceras
                                empresas o personas
                                naturales, deja de navegar en WWW.NOVALIFE.COM.CO, exonerando a la misma de cualquier
                                responsabilidad, daño o
                                perjuicio en la contratación con las terceras empresas. El usuario deja de navegar en
                                NOVALIFE.COM.CO, cuando
                                en el
                                portal web – móvil y aplicaciones (Android e IOS) enlazada no aparezca la marca FINCARAÍZ,
                                cualquiera de sus
                                marcas,
                                o el nombre comercial EDITORA URBANA LTDA y la dirección o nombre de dominio no tenga incluida
                                la palabra
                                FINCARAÍZ
                                o EDITORA URBANA.


                                RESPONSABILIDAD DE FINCARAIZ.COM.CO:

                                Tanto el portal web de internet como su contenido son de propiedad de FINCARAÍZ, cuya función
                                principal es la de
                                ser
                                un medio o canal de información, de forma que no se otorga garantía alguna, expresa, parcial,
                                total o implícita,
                                sobre la precisión, exactitud, confiabilidad u oportunidad de la información o del material allí
                                incluido. No
                                existe
                                tampoco respecto de la información que en el portal web – móvil y aplicaciones (Android e IOS)
                                se encuentra,
                                recomendación, asesoría o consejo al usuario, por tanto las decisiones que se relacionen con
                                dicha información o
                                publicidad, serán de cuenta y riesgo exclusivo del usuario.


                                PROTECCIÓN DE DATOS PERSONALES :

                                El sitio WWW.FINCARAIZ.COM.CO y sus aplicaciones son propiedad de Editora Urbana Ltda, empresa
                                identificada con
                                NIT:
                                800.229.663-1, con domicilio en la Calle 147 #17-78 Piso 8; en la ciudad de Bogotá - Colombia.
                                Esta política de
                                privacidad es parte integrante de los Términos y Condiciones de WWW.FINCARAIZ.COM.CO, y está
                                vigente desde el 2
                                de
                                diciembre de 2013

                                La política de privacidad y protección de datos personales puede ser consultada dentro del sitio
                                a través del
                                siguiente enlace: política de tratamiento de datos personales.
                                Cookies:

                                El usuario y/o quienes ingresen al portal web - móvil y/o aplicaciones (Android e IOS)
                                Fincaraiz.com.co han
                                leído,
                                conocen y aceptan que Fincaraiz.com.co podrá utilizar un sistema de seguimiento mediante la
                                utilización de
                                cookies
                                (denominadas las “Cookies”)
                                . Las Cookies son pequeños archivos que automáticamente se instalan en el disco duro, con
                                una duración limitada en el tiempo que ayudan a personalizar los servicios.


                                También ofrecemos importantes funcionalidades que sólo están disponibles mediante el empleo de
                                Cookies. Las
                                Cookies
                                se utilizan con el fin de conocer los intereses, el comportamiento y la demografía de quienes
                                visitan nuestro
                                portal
                                Web – móvil y/o aplicaciones (Android e IOS) y de esa forma, comprender mejor sus necesidades e
                                intereses y
                                darles
                                un mejor servicio o proveerle información relacionada.


                                También usaremos la información obtenida por intermedio de las Cookies para analizar las páginas
                                navegadas por
                                el
                                visitante o usuario, las búsquedas realizadas, mejorar nuestras iniciativas comerciales y
                                promocionales, mostrar
                                publicidad o promociones, banners de interés, noticias sobre Fincaraiz.com.co, perfeccionar
                                nuestra oferta de
                                contenidos y artículos, personalizar dichos contenidos, presentación y servicios; también
                                podremos utilizar
                                Cookies
                                para promover y hacer cumplir las reglas y seguridad del sitio. Fincaraiz.com.co podrá agregar
                                Cookies en los
                                e-mails que envíe para medir la efectividad de las promociones.


                                La política de datos de navegación o cookies del portal WWW.FINCARAIZ.COM.CO puede ser
                                consultada dentro del
                                sitio a
                                través del siguiente enlace: política de cookies.

                                MODIFICACIÓN Y VALIDEZ DE LOS TÉRMINOS Y CONDICIONES:

                                WWW.FINCARAIZ.COM.CO podrá modificar unilateralmente total o parcialmente la política de
                                términos y condiciones
                                aplicables, informando oportunamente a los usuarios sobre el cambio. Para tal fin,
                                WWW.FINCARAIZ.COM.CO
                                publicará en
                                el sitio los cambios y su fecha de aplicación con la anticipación necesaria para que los
                                usuarios puedan tener
                                acceso a los mismos. El usuario que no acepte las nuevas condiciones establecidas en la
                                política, notificará a
                                WWW.FINCARAIZ.COM.CO en servicio.cliente@fincaraiz.com.co para que se le dé de baja como usuario
                                registrado; en
                                caso
                                de no recibir notificación alguna por parte de los usuarios, WWW.FINCARAIZ.COM.CO podrá
                                válidamente aplicar la
                                nueva
                                política a dichos usuarios.


                                Los usuarios y WWW.FINCARAIZ.COM.CO aceptan y reconocen que en el caso en el que alguna de las
                                disposiciones de
                                los
                                términos y condiciones sea declarada ineficaz parcialmente, nula o inválida por la jurisdicción
                                competente, las
                                demás cláusulas y obligaciones conservarán su validez.


                                Estos términos y condiciones vincularán a las partes desde el momento en que EL CLIENTE los
                                acepte dándose de
                                alta
                                en cualquiera de los sistemas o plataformas de EDITORA URBANA LTDA, así como haciendo uso de los
                                mismos.


                                EL CLIENTE reconoce su deber de informarse sobre cada uno de los productos y/o servicios que
                                adquiere a través
                                de
                                los portales y/o plataformas de EDITORA URBANA LTDA; motivo por el cual deberá considerar en
                                detalle las
                                descripciones, publicidad, condiciones aplicables a cada servicio y/o producto.


                                POLÍTICA DE PUBLICACIÓN DE CONTENIDO:

                                Contenido prohibido para la publicación

                                Para los usuarios del portal web-móvil y aplicaciones (Android e IOS), que además deseen
                                publicar avisos
                                clasificados, se establecen las siguientes restricciones de contenido:


                                Contenido alusivo a menores de edad, es decir aquellos solicitados en favor de adultos y/o
                                empleo.

                                Contenido exclusivo para mayores de edad, tales como aquellos alusivos a órganos reproductivos
                                de la mujer y/o
                                el
                                hombre o prácticas sexuales específicas.

                                Aquellos relacionados con servicios de carácter sexual.

                                Contenido relacionado con la comercialización de armas de fuego, aun aquellas que se consideren
                                como
                                “antigüedad”.

                                Los que tengan que ver con la comercialización de órganos del cuerpo.

                                Contenido alusivo a medicamentos o tratamientos para la salud, así como contenido alusivo al
                                uso, compra, venta,
                                producción o consumo de drogas recreativas o que generen dependencia.

                                Aquellos tendientes a afectar el buen nombre de una persona o entidad, o que tengan dejos
                                discriminatorios o
                                racistas.

                                Contenido relacionado con la comercialización de derechos de autor y afines, tales como
                                grabaciones, programas
                                de
                                televisión y radio, libros, revistas etc.

                                Avisos relacionados con la comercialización de animales.

                                Contenido en otro idioma distinto al español o castellano.


                                Restricciones para las publicaciones de los usuarios

                                Los usuarios persona natural, podrán publicar máximo 2 avisos de inmuebles usados para venta o
                                arriendo de
                                manera
                                gratuita. Un mismo cliente no puede publicar el mismo aviso más de una vez. Las publicaciones
                                que incluyan
                                alguno de
                                los siguientes servicios tendrán costo: Asciende, turbo, destacado, etiqueta, cupo extendido,
                                aviso vacacional.
                                Este usuario acepta y reconoce su deber de informarse sobre las características de los productos
                                de publicación
                                gratis.

                                Los agentes inmobiliarios y emprendedores, no pueden publicar avisos de manera gratuita. Y en
                                todo caso deben
                                suscribir un contrato por los servicios que requieran.

                                Los avisos de inmuebles vacacionales no se pueden publicar de manera gratuita, este tipo de
                                avisos siempre
                                tendrán
                                un costo de publicación.

                                Los usuarios Constructoras no pueden publicar inmuebles usados para la venta o arriendo excepto
                                cuando también
                                ostenten la calidad de agente intermediario y emprendedor y suscriba un contrato de servicios
                                con Editora Urbana
                                Ltda.

                                El usuario Constructora será el único autorizado para la publicación de proyectos nuevos en
                                donde el mismo o un
                                patrimonio autónomo inicial mantengan el control y responsabilidad del inmueble; incluye
                                proyectos sobre planos
                                y/o
                                en construcción; inmuebles nuevos o para estrenar.

                                Los otros tipos de usuarios institucionales, que dentro de sus unidades de negocio registran la
                                necesidad de
                                publicar inmuebles para venta o arriendo (remates o daciones en pago), deberán suscribir un
                                contrato de
                                servicios
                                con Editora Urbana Ltda, para todos los efectos el presente documento de términos y condiciones
                                será aplicable
                                para
                                su unidad de negocio.

                                Un cliente no puede publicar el mismo aviso más de una vez.

                                No se permite la publicación de lotes de cementerio.

                                No se permite la publicación de inmuebles con embargo de cualquier tipo.

                                No se permite la publicación de minas y/o cualquier terreno o propiedad en zona arqueológica,
                                lugares o sitios
                                públicos.

                                No se permite la publicación de bienes fiscales, de la nación, entidades territoriales y
                                entidades
                                administrativas
                                de cualquier tipo.

                                No se permite la publicación de documentos que acrediten la propiedad u otros derechos reales
                                sobre bienes
                                muebles o
                                inmuebles.

                                La descripción del aviso no debe contener:

                                Información de contacto sobre el ofertante del aviso u otra persona o entidad.
                                Enlaces o Links.
                                Correos – teléfonos.
                                Cuentas bancarias.

                                Las fotografías que se deseen publicar no podrán contener:

                                Números de teléfono
                                Marcas de agua o logos de otros portales.
                                Correos electrónicos.
                                Fotos descargadas de internet.
                                Foto sugerentes de cuerpos desnudos o semi-desnudos.
                                Fotos donde aparezcan menores de edad.

                                El aviso clasificado deberá comenzar con una palabra alusiva al bien que se ofrece o que se
                                busca, si se trata
                                de
                                vivienda, por el barrio. En ningún caso el clasificado podrá comenzar con números, artículos,
                                signos o
                                abreviaturas.
                                Todos los clasificados se encuentran sujetos a modificación de acuerdo con las normas de
                                publicación.

                                Para los casos en los que el cliente cuente con un micrositio, éste no podrá contener:

                                URLs o links
                                Banners con publicidad relacionada a algo diferente de la venta y/o arriendo de inmuebles que
                                estén publicados
                                en
                                www.fincaraiz.com.co en su portal web-móvil o aplicaciones (Android e IOS)
                                Datos o información que tenga como objetivo promover negocios diferentes a la venta y/o arriendo
                                de inmuebles
                                que
                                estén publicados en www.fincaraiz.com.co en su portal web-móvil o aplicaciones (Android e IOS).

                                Para los casos en los que el cliente publique videos (clientes particulares no cuentan con este
                                servicio) éste
                                no
                                podrá contener:

                                Información de inmuebles que no estén publicados en www.fincaraiz.com.co portal web-móvil y
                                aplicaciones
                                (Android e
                                IOS)
                                Anuncios o información que tenga como objetivo promover negocios diferentes a la venta y/o
                                arriendo de inmuebles
                                que
                                estén publicados en www.fincaraiz.com.co en su portal web-móvil o aplicaciones (Android e IOS).

                                WWW.FINCARAIZ.COM.CO tiene la potestad de eliminar cualquier aviso que viole una o varias de
                                estas reglas con el
                                fin
                                de garantizar la calidad de la información del portal. Cuando resulte evidente que el usuario
                                está evadiendo la
                                política de publicación o la tipología de los servicios ofrecidos en la oficina virtual para
                                acceder a otros
                                servicios ofrecidos, FINCARAÍZ tendrá la potestad de actuar de acuerdo con el incumplimiento de
                                las obligaciones
                                del
                                usuario.

                                Evasión de estructura de productos

                                Se considera evasión la publicación de inmuebles vacacionales en arriendo, creación de múltiples
                                cuentas para la
                                publicación de avisos y la publicación de fotografías con marcas que se asemejen o que busquen
                                diferenciación
                                visual
                                dentro de las listas de inmuebles.


                                Estas evasiones llevarán un cobro a la persona registrada como titular de la cuenta del costo
                                del producto que
                                se
                                está intentando evadir.


                                Comportamientos no autorizados y/o prohibidos por parte de los usuarios

                                No es permitido realizar Crawling y scraping de las páginas web de fincaraiz.com.co y todos sus
                                subdominios, del
                                portal web y de las aplicaciones (Android e IOS) por medio de robots o spiders que no estén
                                explícitamente
                                autorizados en el archivo www.fincaraiz.com.co/robots.txt.

                                No es permitido copiar avisos ofrecidos por www.fincaraiz.com.co en su portal web-móvil y/o
                                aplicaciones
                                (Android e
                                IOS) para republicarlos en otros portales.

                                No es permitido copiar ningún tipo de información disponible en www.fincaraiz.com.co en su
                                portal web-móvil y/o
                                aplicaciones (Android e IOS) con fines comerciales diferentes a la negociación del inmueble
                                específico.

                                No es permitido contactar a los anunciantes de avisos publicados en www.fincaraiz.com.co en su
                                portal web-móvil
                                y/o
                                aplicaciones (Android e IOS) con un fin diferente a la compra, venta o arrendamiento del
                                inmueble.

                                No es permitido extraer información de www.fincaraiz.com.co en su portal web-móvil y/o
                                aplicaciones para
                                realizar
                                construcción de base de datos con fines comerciales y/o difusión masiva de información o
                                publicidad.

                                No es permitido revender los servicios prestados por www.fincaraiz.com.co en su portal web-móvil
                                y/o
                                aplicaciones
                                (Android e IOS) o utilizarlos para operar como intermediario, canal o medio de comunicación.
                                Queda expresamente
                                prohibido que EL CLIENTE utilice su oficina virtual, sus cuentas de acceso al PORTAL, o en
                                general los servicios
                                contratados con www.fincaraiz.com.co, para prestar los mismos servicios a terceras personas,
                                bien sea de forma
                                gratuita u onerosa, como un servicio independiente o complementario a otras actividades

                                No se otorga autorización o licencia para que EL CLIENTE utilice o se aproveche de las marcas,
                                signos, nombres
                                comerciales o la razón social de EDITORA URBANA LTDA o sus empresas vinculadas; de manera que EL
                                CLIENTE no
                                podrá
                                usar las marcas, signos, nombres comerciales o la razón social de EDITORA URBANA LTDA, incluso a
                                través del
                                empleo
                                de vínculos o enlaces en Internet.


                                Facturación:

                                EDITORA URBANA LTDA ofrece a través de WWW.FINCARAIZ.COM.CO en su portal web-móvil y/o
                                aplicaciones (Android e
                                IOS)
                                servicios y productos gratuitos y de pago. En este sentido, cuando los servicios y/o productos
                                adquiridos por un
                                cliente o usuario generen cobros por parte de EDITORA URBANA LTDA, ésta emitirá la
                                correspondiente factura, la
                                cual,
                                de acuerdo a los términos y condiciones aceptados por las partes (EDITORA URBANA LTDA. y el
                                usuario persona
                                natural
                                o jurídica que acepta los términos y condiciones), se realizará bajo el siguiente acuerdo de
                                expedición y
                                aceptación
                                de facturas electrónicas:


                                INICIO DE OPERACIONES. Las partes acuerdan que la vigencia de éste inicia con la facturación
                                siguiente a la
                                fecha en
                                que se acepta este acuerdo.

                                CAUSALES DE TERMINACIÓN. El presente acuerdo tendrá una duración indefinida. Sin embargo, podrá
                                darse por
                                terminado
                                por cualquiera de las partes, previo aviso dado por escrito a su contraparte con 30 (treinta)
                                días calendario de
                                anticipación.

                                INTERVINIENTES EN EL PROCESO. Los intervinientes en el proceso se definen a continuación:

                                EL OBLIGADO A FACTURAR: Es la persona natural o jurídica que conforme a las normas tributarias
                                tiene la
                                obligación
                                de facturar, y que tratándose de la factura electrónica, la expide, generándola y numerándola
                                por medio de un
                                sistema de facturación por computador en los términos del artículo 13 (3) del Decreto 1165 de
                                1996 o las normas
                                que
                                lo modifiquen, entregándola al adquirente y conservándola para su posterior exhibición, en los
                                términos que se
                                establecen en Decreto 2242 de 2015 y la Resolución 19 de 2016.

                                EL ADQUIRENTE: Es la persona natural o jurídica que como adquirente de bienes o servicios debe
                                exigir factura o
                                documento equivalente y, que tratándose de la factura electrónica, la acepta y conserva para su
                                posterior
                                exhibición, en los términos que se establecen en el Decreto 2242 de 2015 y la Resolución 19 de
                                2016.

                                EL PROVEEDOR TECNOLÓGICO: Es una persona jurídica cuya razón social es: F&M Technology y
                                NIT:900306823, que
                                presta
                                al OBLIGADO A FACTURAR, los servicios inherentes al proceso de facturación, tales como:
                                expedición, entrega,
                                aceptación/rechazo, conservación y exhibición, cumpliendo todos los requisitos y condiciones
                                exigidos en el
                                Decreto
                                2242 de 2015 y la Resolución 19 de 2016.

                                En todo caso el obligado a facturar y el adquirente son los responsables frente a la Dirección
                                de Impuestos y
                                Aduanas Nacionales por las obligaciones que como tales les corresponden. EL PROVEEDOR
                                TECNOLÓGICO realizará los
                                procedimientos de expedición (generación), entrega, aceptación y conservación, incluyendo el
                                procedimiento de
                                exhibición mediante el portal informático o Software e-Bill. Estos procedimientos realizados por
                                EL PROVEEDOR
                                TECNOLÓGICO cuentan con la certificación ISO 9001: 2008 No: CO10/3616 e ISO 27001: 2013 No:
                                CO16/00428, otorgada
                                y
                                vigente por organismos acreditados por la Superintendencia de Industria y Comercio, a decir SGS
                                Colombia S.A. y
                                Bureau Veritas.


                                PROCEDIMIENTOS DE EXPEDICIÓN, ENTREGA, ACEPTACIÓN/RECHAZO, CONSERVACIÓN Y EXHIBICIÓN: EL
                                PROVEEDOR TECNOLÓGICO
                                ofrece a EL OBLIGADO A FACTURAR y a EL ADQUIRENTE un servicio virtual (portal e-Bill) a través
                                del cual éstos
                                podrán
                                llevar a cabo las siguientes operaciones haciendo uso de los identificadores de usuario y clave
                                que les serán
                                asignadas, realizando un procedimiento de autenticación SSO.

                                PROCEDIMIENTO DE CONTINGENCIA APLICABLE: Cuando se presenten situaciones que no permitan llevar
                                a cabo los
                                procedimientos de factura electrónica, EL OBLIGADO A FACTURAR tiene definidos procedimientos
                                manuales usando el
                                prefijo establecido por la DIAN.

                                RESPONSABILIDADES: Es responsabilidad de EL ADQUIRENTE rechazar la factura por los medios
                                disponibles por este
                                último (correo electrónico) y/o los medios que EL OBLIGADO A FACTURAR le comunique a EL
                                ADQUIRENTE son oficiales
                                para este trámite. Sin perjuicio de lo establecido en la Ley 1231 de 2008 y su Decreto
                                Reglamentario número 3323
                                de
                                2009 y de acuerdo con lo establecido en la Ley 1676 de 2013, particularmente lo contenido en el
                                artículo 86 de
                                esta
                                última Ley, el cual modificó el inciso tercero del artículo segundo de la Ley 1231 de 2008, si
                                el adquirente
                                dentro
                                de los tres (3) días hábiles siguientes al recibo de la factura no reclamare en contra de su
                                contenido, se
                                entenderá
                                que la misma es irrevocable y tácitamente aceptada. En este sentido, el obligado a facturar,
                                declara bajo la
                                gravedad del juramento que para efectos de endoso de la factura, se aplicaron los presupuestos
                                de la aceptación
                                tácita.

                                El acuerdo de facturación se hará vigente desde el momento de la aceptación de los términos y
                                condiciones del
                                portal
                                por parte del usuario – ADQUIRENTE.

                                La plataforma podrá poner a su disposición métodos de pago electrónicos para el pago de los
                                servicios
                                contratados,
                                dichos métodos de pago corresponden a páginas especializadas administradas por terceros con
                                reconocimiento en el
                                mercado. Editora Urbana Ltda no será responsable de ninguna de las operaciones que EL USUARIO
                                efectúe estando
                                dentro
                                de las plataformas de pago administradas que son por terceros ajenos a Editora Urbana.
                            </p>

                    </div>
                </div>
            </div>

        </div>
    @endauth
    @guest
        <div class="container text-wrap">
            <p>
                Términos y condiciones

                Cláusulas de uso de portal WWW.NOVALIFE.COM.CO (Web, móvil, aplicaciones IOS y android)


                NOVALIFE.COM.CO de propiedad de EDITORA URBANA LTDA, pretende dar a los usuarios seguridad en
                cuanto al empleo
                de
                la información que aparece en la misma, así como la que se desee ingresar a la base de datos. De
                igual manera,
                facilitar a los usuarios el acceso a los datos en su portal web, móvil y/o aplicaciones (Android
                e IOS).


                La finalidad primordial de la página en cuestión es poner en conocimiento de los interesados,
                las ofertas,
                promociones y demandas de empleo o de adquisición de bienes que terceros publicitan, así como la
                promoción y
                divulgación de contenidos comerciales a través de las plataformas o bases de datos generadas a
                través de ellas.


                NOVALIFE.COM.CO, actúa como portal web, móvil y aplicaciones (Android e IOS) de información o
                publicidad, no
                generándose por ello, oferta comercial o contractual entre NOVALIFE.COM.CO y el usuario.


                El usuario entonces contratará únicamente con las empresas o personas naturales enlazadas, sin
                que exista
                relación
                contractual o de intermediación por parte de EDITORA URBANA LTDA. En todo caso, siempre que el
                usuario pulse un
                enlace se entenderá que utiliza el portal web, móvil y aplicaciones (Android e IOS) de la
                empresa enlazada,
                dejando
                de utilizar el portal web, móvil y/o aplicaciones (Android e IOS) de NOVALIFE.COM.CO, no podrá
                el usuario
                alegar
                confusión respecto de la marca o empresa con la cual el usuario ha contratado finalmente. La
                contratación
                siempre
                será entre el usuario y la empresa enlazada.


                Al aceptar los términos y condiciones el usuario acepta que EDITORA URBANA LTDA le envíe a sus
                datos de contacto
                información sobre otros productos o servicios relacionados con su actividad dentro del portal
                NOVALIFE.COM.CO;
                como
                pueden ser inmuebles que tengan características similares a las de su búsqueda inicial.


                DEFINICIONES:

                USUARIO PERSONA NATURAL: Todo usuario del portal NOVALIFE.COM.CO, que sea personal natural,
                mayor de edad, que
                no
                ostente la calidad de comerciante o intermediario en el mercado y que use los servicios del
                portal para
                satisfacer
                necesidades de orden personal, en particular la publicación o anuncio de inmuebles usados ya sea
                con servicios
                gratuitos o pago a través de la Oficina Virtual.

                USUARIO AGENTE INTERMEDIARIO Y EMPRENDEDORES: Todo usuario del portal, bien sea persona natural
                o jurídica, que
                ostenta la calidad de comerciante o intermediario en el mercado y que utiliza los servicios del
                portal en
                desarrollo
                de su actividad económica en relación con inmuebles usados. Este tipo de usuario podrá utilizar
                los servicios
                del
                portal exclusivamente a través de la Oficina Virtual.

                USUARIO CONSTRUCTORA: Todo usuario del portal, que sea persona jurídica y cuyo objeto social
                incluya las
                actividades
                relacionadas con la construcción y/o promoción de proyectos inmobiliarios nuevos. Este tipo de
                usuario podrá
                utilizar los servicios del portal exclusivamente a través de la Oficina Virtual.

                OTRO TIPO DE USUARIO INSTITUCIONAL: Usuarios que sean personas jurídicas y cuyo objeto social no
                incluya las
                actividades relacionadas con la construcción y/o promoción de proyectos inmobiliarios, o la
                intermediación como
                agentes inmobiliarios; pero que para el desarrollo de su objeto social requieren publicar o
                anunciar bienes
                inmuebles usados. Este tipo de usuario podrá utilizar los servicios del portal exclusivamente a
                través de la
                Oficina
                Virtual.

                DERECHOS Y OBLIGACIONES DE LAS PARTES:

                Por parte de NOVALIFE.COM.CO
                Son obligaciones asumidas por el propietario del portal web-móvil y aplicaciones (Android e
                IOS), en su calidad
                de
                proveedor:


                Prestar los servicios suscritos, respondiendo por las reclamaciones que por deficiencia en el
                servicio realicen
                los
                clientes.

                Garantizar el secreto de las comunicaciones, reservándose el derecho a rectificación de
                informaciones falsas,
                ilícitas, o que contravengan la moral y las buenas costumbres.

                Respetar el derecho a la intimidad y privacidad del usuario.

                Adecuar continuamente su portal web- móvil y aplicaciones (Android e IOS), con miras a prestar
                un eficiente
                servicio, sin embargo, podrá en cualquier momento y sin previo aviso, suspender temporalmente la
                accesibilidad
                al
                portal web – móvil y aplicaciones (Android e IOS), para efectos de mantenimiento, reparación,
                actualización o
                mejora
                de los servicios, o modificaciones necesarias para el buen cumplimiento de sus obligaciones.

                NOVALIFE.COM.CO, no alojará material pornográfico, imágenes o videos, cuando existan indicios,
                de que las
                personas
                fotografiadas o filmadas sean menores de edad.

                Responder por los servicios propios e información originada directamente por la misma, además
                por el uso de
                marcas,
                emblemas, nombres o enseñas comerciales, que sean de su propiedad exclusiva.

                Velar por que la información que provenga del cliente, catalogada como estrictamente personal,
                sea guardada por
                la
                empresa con absoluta confidencialidad, garantizando los derechos de acceso, rectificación y
                cancelación de los
                datos
                personales a instancias del interesado y bajo sus directas instrucciones.

                Velar porque los contenidos del portal web- móvil y aplicaciones (Android e IOS), no tengan
                carácter
                pornográfico,
                xenófobo, discriminatorio, racista, difamatorio o que de cualquier modo fomenten la violencia.

                Procurar por un uso legal del portal web – móvil y aplicaciones (Android e IOS), evitando
                cualquier clase de
                actuaciones que resulten claramente violatorias de los derechos de los usuarios.

                NOVALIFE.COM.CO, se reserva el derecho de excluir a los usuarios que contravengan con su
                conducta las
                obligaciones
                antes establecidas, así como cancelar la suscripción o servicios, en este caso, podrá proceder
                inmediatamente,
                sin
                que haya lugar a requerimiento o notificación alguna al usuario infractor.

                Por parte del CLIENTE O USUARIO:
                Son obligaciones asumidas por el usuario al utilizar el portal web:


                Realizar un uso lícito de los servicios absteniéndose de efectuar acciones que provoquen daño o
                alteración en
                los
                contenidos y los datos de otros usuarios y/o de terceras personas, bajo pena de ser excluido del
                acceso a la
                misma.

                No incluir contenidos pornográficos, imágenes o videos, en donde se observe el uso de menores de
                edad, o
                simplemente
                puedan ser catalogados como contrarios a las buenas costumbres o a la ley.

                Pretender que sea publicada información falsa o caduca, que contravengan derechos tan
                fundamentales, como la
                integridad, la moral, el honor, o la intimidad personal. Así como aquellos que contengan
                información o mensajes
                violentos, degradantes o racistas.

                Abstenerse de introducir virus informáticos que puedan afectar al portal web – móvil y
                aplicaciones (Android e
                IOS)
                de NOVALIFE.COM.CO, o que puedan dañar e-mails de terceros cuya información se haya obtenido a
                través de un
                aviso
                publicado por EDITORA URBANA LTDA.

                Garantizar que ninguna de las piezas, imágenes, textos, fotos, videos publicados en
                WWW.NOVALIFE.COM.CO en su
                portal web-móvil y aplicaciones (Android e IOS), afecta derechos de terceros, así sean
                trabajadores o
                contratistas
                del mismo cliente. Asimismo, EL CLIENTE garantiza que la información, las piezas, fotos, videos
                a publicar no
                constituyen publicidad engañosa o actos de competencia desleal. En cualquier caso, EL CLIENTE
                mantendrá indemne
                a
                EDITORA URBANA LTDA ante cualquier reclamo por usos no autorizados de materiales como obras,
                programas de
                computador, marcas o ante el reclamo de consumidores o competidores afectados por la calidad
                objetiva, la
                veracidad,
                la actualidad o la idoneidad de los contenidos publicados.

                Asumir las consecuencias legales a que den lugar sus publicaciones en WWW.NOVALIFE.COM.CO (en su
                portal
                web-móvil
                y/o aplicaciones Android e IOS), generando de esta forma publicidad engañosa al consumidor
                final;
                constituyéndose en
                el responsable directo por las reclamaciones y/o demandas relacionadas y garantizando mantener
                indemne a EDITORA
                URBANA LTDA ante las mismas.

                EL CLIENTE reconoce su deber de informarse sobre cada uno de los productos y/o servicios que
                adquiere a través
                de
                los portales y/o plataformas de EDITORA URBANA LTDA; motivo por el cual deberá considerar en
                detalle las
                descripciones, publicidad, condiciones aplicables a cada servicio y/o producto.

                Conocer y cumplir las políticas de publicación que le sean aplicables de acuerdo a estos mismos
                términos y
                condiciones.

                El incumplimiento de las obligaciones por parte del CLIENTE dará lugar a la no prestación del
                servicio de forma
                justificada por parte de EDITORA URBANA LTDA. Quien mantendrá en todo momento la facultad de
                resolver el
                contrato y
                exigir las indemnizaciones correspondientes o forzar el cumplimiento del mismo.

                El derecho de retracto está regulado por la ley de consumo vigente en Colombia en cuanto a sus
                efectos y plazos.
                No
                obstante lo anterior, el ejercicio de tal derecho conlleva necesariamente la consideración de
                los gastos
                administrativos, financieros, comerciales o de cualquier tipo en los que efectiva y
                justificadamente haya
                incurrido
                EDITORA URBANA LTDA durante la relación comercial; los cuales serán tenidos en cuenta al momento
                de realizar la
                liquidación correspondiente.

                El usuario reconoce y respeta la titularidad de NOVALIFE respecto de los programas de
                computador, marcas,
                nombres
                comerciales, textos, dibujos, fotografías y, en general, todos los bienes inmateriales
                protegidos por la
                propiedad
                intelectual utilizados en NOVALIFE. Igualmente reconoce que el uso de los servicios de FINCARAÍZ
                no le otorga
                licencia, cesión o autorización alguna respecto de estos bienes, de forma que todo uso del
                software, marcas y
                nombres de FINCARAÍZ, entre otros, deberá contar con autorización previa y expresa por parte del
                titular del
                derecho.

                El usuario acepta que al pulsar en los enlaces (links), que lo conecten a webs de terceras
                empresas o personas
                naturales, deja de navegar en FINCARAÍZ, exonerando a la misma de cualquier responsabilidad,
                daño o perjuicio
                derivado de su relación con las terceras empresas o personas. El usuario deja de navegar en
                FINCARAÍZ, cuando en
                el
                portal web – móvil y aplicaciones enlazadas no aparezca la marca FINCARAÍZ, cualquiera de sus
                marcas, o el
                nombre
                comercial EDITORA URBANA LTDA y la dirección o nombre de dominio no tenga incluida la palabra
                FINCARAÍZ o
                EDITORA
                URBANA.

                Considerando que los servicios prestados constituyen obligaciones de medio y no de resultado, el
                usuario exonera
                de
                toda responsabilidad a FINCARAÍZ por los resultados obtenidos al implementar los servicios.

                Dar aviso oportuno a FINCARAÍZ sobre la violación o evasión de los términos y condiciones por
                parte de cualquier
                otro usuario. Dar aviso oportuno a FINCARAÍZ sobre la violación o evasión de los términos y
                condiciones por
                parte de
                cualquier otro usuario.

                PROTECCIÓN DE LA PROPIEDAD INTELECTUAL:

                Se entiende por las dos partes comprometidas, NOVALIFE.COM.CO y el cliente, que el diseño,
                imágenes, marcas,
                bases
                de datos, gráficos, frames, banners, software, distintos códigos, fuente , objeto, y en general
                los demás
                elementos
                integradores del portal web – móvil y aplicaciones (Android e IOS), son de propiedad legítima de
                NOVALIFE.COM.CO
                y/o de EDITORA URBANA LTDA, quien posee legalmente los derechos exclusivos para la explotación y
                uso de los
                mismos.
                Por lo anterior, el usuario que acceda al portal web – móvil y aplicaciones (Android e IOS), no
                podrá imitarlos,
                asimilarlos, transformarlos, registrarlos en ningún lugar o ante cualquier entidad, no podrá
                tampoco,
                reproducirlos,
                distribuirlos, transmitirlos, publicitarlos, licenciarlos, cederlos o ejercer derechos de
                titularidad,
                directamente
                o por intermedio de terceros, crear nuevos productos o servicios derivados de la información y
                elementos
                contenidos
                en la página. Lo anterior también aplicará, para diseños, marcas, gráficos, imágenes, que
                aparezcan en el portal
                web, pertenecientes a empresas, entidades o personas naturales colaboradoras o contratantes con
                EDITORA URBANA
                LTDA,
                salvo el consentimiento expreso de las mismas, el que en todo caso deberá constar por escrito.


                PRODUCTOS Y SERVICIOS DE TERCERAS PERSONAS:

                El usuario acepta que al pulsar en los enlaces (links), que lo conecten a webs de terceras
                empresas o personas
                naturales, deja de navegar en WWW.NOVALIFE.COM.CO, exonerando a la misma de cualquier
                responsabilidad, daño o
                perjuicio en la contratación con las terceras empresas. El usuario deja de navegar en
                NOVALIFE.COM.CO, cuando
                en el
                portal web – móvil y aplicaciones (Android e IOS) enlazada no aparezca la marca FINCARAÍZ,
                cualquiera de sus
                marcas,
                o el nombre comercial EDITORA URBANA LTDA y la dirección o nombre de dominio no tenga incluida
                la palabra
                FINCARAÍZ
                o EDITORA URBANA.


                RESPONSABILIDAD DE FINCARAIZ.COM.CO:

                Tanto el portal web de internet como su contenido son de propiedad de FINCARAÍZ, cuya función
                principal es la de
                ser
                un medio o canal de información, de forma que no se otorga garantía alguna, expresa, parcial,
                total o implícita,
                sobre la precisión, exactitud, confiabilidad u oportunidad de la información o del material allí
                incluido. No
                existe
                tampoco respecto de la información que en el portal web – móvil y aplicaciones (Android e IOS)
                se encuentra,
                recomendación, asesoría o consejo al usuario, por tanto las decisiones que se relacionen con
                dicha información o
                publicidad, serán de cuenta y riesgo exclusivo del usuario.


                PROTECCIÓN DE DATOS PERSONALES :

                El sitio WWW.FINCARAIZ.COM.CO y sus aplicaciones son propiedad de Editora Urbana Ltda, empresa
                identificada con
                NIT:
                800.229.663-1, con domicilio en la Calle 147 #17-78 Piso 8; en la ciudad de Bogotá - Colombia.
                Esta política de
                privacidad es parte integrante de los Términos y Condiciones de WWW.FINCARAIZ.COM.CO, y está
                vigente desde el 2
                de
                diciembre de 2013

                La política de privacidad y protección de datos personales puede ser consultada dentro del sitio
                a través del
                siguiente enlace: política de tratamiento de datos personales.
                Cookies:

                El usuario y/o quienes ingresen al portal web - móvil y/o aplicaciones (Android e IOS)
                Fincaraiz.com.co han
                leído,
                conocen y aceptan que Fincaraiz.com.co podrá utilizar un sistema de seguimiento mediante la
                utilización de
                cookies
                (denominadas las “Cookies”)
                . Las Cookies son pequeños archivos que automáticamente se instalan en el disco duro, con
                una duración limitada en el tiempo que ayudan a personalizar los servicios.


                También ofrecemos importantes funcionalidades que sólo están disponibles mediante el empleo de
                Cookies. Las
                Cookies
                se utilizan con el fin de conocer los intereses, el comportamiento y la demografía de quienes
                visitan nuestro
                portal
                Web – móvil y/o aplicaciones (Android e IOS) y de esa forma, comprender mejor sus necesidades e
                intereses y
                darles
                un mejor servicio o proveerle información relacionada.


                También usaremos la información obtenida por intermedio de las Cookies para analizar las páginas
                navegadas por
                el
                visitante o usuario, las búsquedas realizadas, mejorar nuestras iniciativas comerciales y
                promocionales, mostrar
                publicidad o promociones, banners de interés, noticias sobre Fincaraiz.com.co, perfeccionar
                nuestra oferta de
                contenidos y artículos, personalizar dichos contenidos, presentación y servicios; también
                podremos utilizar
                Cookies
                para promover y hacer cumplir las reglas y seguridad del sitio. Fincaraiz.com.co podrá agregar
                Cookies en los
                e-mails que envíe para medir la efectividad de las promociones.


                La política de datos de navegación o cookies del portal WWW.FINCARAIZ.COM.CO puede ser
                consultada dentro del
                sitio a
                través del siguiente enlace: política de cookies.

                MODIFICACIÓN Y VALIDEZ DE LOS TÉRMINOS Y CONDICIONES:

                WWW.FINCARAIZ.COM.CO podrá modificar unilateralmente total o parcialmente la política de
                términos y condiciones
                aplicables, informando oportunamente a los usuarios sobre el cambio. Para tal fin,
                WWW.FINCARAIZ.COM.CO
                publicará en
                el sitio los cambios y su fecha de aplicación con la anticipación necesaria para que los
                usuarios puedan tener
                acceso a los mismos. El usuario que no acepte las nuevas condiciones establecidas en la
                política, notificará a
                WWW.FINCARAIZ.COM.CO en servicio.cliente@fincaraiz.com.co para que se le dé de baja como usuario
                registrado; en
                caso
                de no recibir notificación alguna por parte de los usuarios, WWW.FINCARAIZ.COM.CO podrá
                válidamente aplicar la
                nueva
                política a dichos usuarios.


                Los usuarios y WWW.FINCARAIZ.COM.CO aceptan y reconocen que en el caso en el que alguna de las
                disposiciones de
                los
                términos y condiciones sea declarada ineficaz parcialmente, nula o inválida por la jurisdicción
                competente, las
                demás cláusulas y obligaciones conservarán su validez.


                Estos términos y condiciones vincularán a las partes desde el momento en que EL CLIENTE los
                acepte dándose de
                alta
                en cualquiera de los sistemas o plataformas de EDITORA URBANA LTDA, así como haciendo uso de los
                mismos.


                EL CLIENTE reconoce su deber de informarse sobre cada uno de los productos y/o servicios que
                adquiere a través
                de
                los portales y/o plataformas de EDITORA URBANA LTDA; motivo por el cual deberá considerar en
                detalle las
                descripciones, publicidad, condiciones aplicables a cada servicio y/o producto.


                POLÍTICA DE PUBLICACIÓN DE CONTENIDO:

                Contenido prohibido para la publicación

                Para los usuarios del portal web-móvil y aplicaciones (Android e IOS), que además deseen
                publicar avisos
                clasificados, se establecen las siguientes restricciones de contenido:


                Contenido alusivo a menores de edad, es decir aquellos solicitados en favor de adultos y/o
                empleo.

                Contenido exclusivo para mayores de edad, tales como aquellos alusivos a órganos reproductivos
                de la mujer y/o
                el
                hombre o prácticas sexuales específicas.

                Aquellos relacionados con servicios de carácter sexual.

                Contenido relacionado con la comercialización de armas de fuego, aun aquellas que se consideren
                como
                “antigüedad”.

                Los que tengan que ver con la comercialización de órganos del cuerpo.

                Contenido alusivo a medicamentos o tratamientos para la salud, así como contenido alusivo al
                uso, compra, venta,
                producción o consumo de drogas recreativas o que generen dependencia.

                Aquellos tendientes a afectar el buen nombre de una persona o entidad, o que tengan dejos
                discriminatorios o
                racistas.

                Contenido relacionado con la comercialización de derechos de autor y afines, tales como
                grabaciones, programas
                de
                televisión y radio, libros, revistas etc.

                Avisos relacionados con la comercialización de animales.

                Contenido en otro idioma distinto al español o castellano.


                Restricciones para las publicaciones de los usuarios

                Los usuarios persona natural, podrán publicar máximo 2 avisos de inmuebles usados para venta o
                arriendo de
                manera
                gratuita. Un mismo cliente no puede publicar el mismo aviso más de una vez. Las publicaciones
                que incluyan
                alguno de
                los siguientes servicios tendrán costo: Asciende, turbo, destacado, etiqueta, cupo extendido,
                aviso vacacional.
                Este usuario acepta y reconoce su deber de informarse sobre las características de los productos
                de publicación
                gratis.

                Los agentes inmobiliarios y emprendedores, no pueden publicar avisos de manera gratuita. Y en
                todo caso deben
                suscribir un contrato por los servicios que requieran.

                Los avisos de inmuebles vacacionales no se pueden publicar de manera gratuita, este tipo de
                avisos siempre
                tendrán
                un costo de publicación.

                Los usuarios Constructoras no pueden publicar inmuebles usados para la venta o arriendo excepto
                cuando también
                ostenten la calidad de agente intermediario y emprendedor y suscriba un contrato de servicios
                con Editora Urbana
                Ltda.

                El usuario Constructora será el único autorizado para la publicación de proyectos nuevos en
                donde el mismo o un
                patrimonio autónomo inicial mantengan el control y responsabilidad del inmueble; incluye
                proyectos sobre planos
                y/o
                en construcción; inmuebles nuevos o para estrenar.

                Los otros tipos de usuarios institucionales, que dentro de sus unidades de negocio registran la
                necesidad de
                publicar inmuebles para venta o arriendo (remates o daciones en pago), deberán suscribir un
                contrato de
                servicios
                con Editora Urbana Ltda, para todos los efectos el presente documento de términos y condiciones
                será aplicable
                para
                su unidad de negocio.

                Un cliente no puede publicar el mismo aviso más de una vez.

                No se permite la publicación de lotes de cementerio.

                No se permite la publicación de inmuebles con embargo de cualquier tipo.

                No se permite la publicación de minas y/o cualquier terreno o propiedad en zona arqueológica,
                lugares o sitios
                públicos.

                No se permite la publicación de bienes fiscales, de la nación, entidades territoriales y
                entidades
                administrativas
                de cualquier tipo.

                No se permite la publicación de documentos que acrediten la propiedad u otros derechos reales
                sobre bienes
                muebles o
                inmuebles.

                La descripción del aviso no debe contener:

                Información de contacto sobre el ofertante del aviso u otra persona o entidad.
                Enlaces o Links.
                Correos – teléfonos.
                Cuentas bancarias.

                Las fotografías que se deseen publicar no podrán contener:

                Números de teléfono
                Marcas de agua o logos de otros portales.
                Correos electrónicos.
                Fotos descargadas de internet.
                Foto sugerentes de cuerpos desnudos o semi-desnudos.
                Fotos donde aparezcan menores de edad.

                El aviso clasificado deberá comenzar con una palabra alusiva al bien que se ofrece o que se
                busca, si se trata
                de
                vivienda, por el barrio. En ningún caso el clasificado podrá comenzar con números, artículos,
                signos o
                abreviaturas.
                Todos los clasificados se encuentran sujetos a modificación de acuerdo con las normas de
                publicación.

                Para los casos en los que el cliente cuente con un micrositio, éste no podrá contener:

                URLs o links
                Banners con publicidad relacionada a algo diferente de la venta y/o arriendo de inmuebles que
                estén publicados
                en
                www.fincaraiz.com.co en su portal web-móvil o aplicaciones (Android e IOS)
                Datos o información que tenga como objetivo promover negocios diferentes a la venta y/o arriendo
                de inmuebles
                que
                estén publicados en www.fincaraiz.com.co en su portal web-móvil o aplicaciones (Android e IOS).

                Para los casos en los que el cliente publique videos (clientes particulares no cuentan con este
                servicio) éste
                no
                podrá contener:

                Información de inmuebles que no estén publicados en www.fincaraiz.com.co portal web-móvil y
                aplicaciones
                (Android e
                IOS)
                Anuncios o información que tenga como objetivo promover negocios diferentes a la venta y/o
                arriendo de inmuebles
                que
                estén publicados en www.fincaraiz.com.co en su portal web-móvil o aplicaciones (Android e IOS).

                WWW.FINCARAIZ.COM.CO tiene la potestad de eliminar cualquier aviso que viole una o varias de
                estas reglas con el
                fin
                de garantizar la calidad de la información del portal. Cuando resulte evidente que el usuario
                está evadiendo la
                política de publicación o la tipología de los servicios ofrecidos en la oficina virtual para
                acceder a otros
                servicios ofrecidos, FINCARAÍZ tendrá la potestad de actuar de acuerdo con el incumplimiento de
                las obligaciones
                del
                usuario.

                Evasión de estructura de productos

                Se considera evasión la publicación de inmuebles vacacionales en arriendo, creación de múltiples
                cuentas para la
                publicación de avisos y la publicación de fotografías con marcas que se asemejen o que busquen
                diferenciación
                visual
                dentro de las listas de inmuebles.


                Estas evasiones llevarán un cobro a la persona registrada como titular de la cuenta del costo
                del producto que
                se
                está intentando evadir.


                Comportamientos no autorizados y/o prohibidos por parte de los usuarios

                No es permitido realizar Crawling y scraping de las páginas web de fincaraiz.com.co y todos sus
                subdominios, del
                portal web y de las aplicaciones (Android e IOS) por medio de robots o spiders que no estén
                explícitamente
                autorizados en el archivo www.fincaraiz.com.co/robots.txt.

                No es permitido copiar avisos ofrecidos por www.fincaraiz.com.co en su portal web-móvil y/o
                aplicaciones
                (Android e
                IOS) para republicarlos en otros portales.

                No es permitido copiar ningún tipo de información disponible en www.fincaraiz.com.co en su
                portal web-móvil y/o
                aplicaciones (Android e IOS) con fines comerciales diferentes a la negociación del inmueble
                específico.

                No es permitido contactar a los anunciantes de avisos publicados en www.fincaraiz.com.co en su
                portal web-móvil
                y/o
                aplicaciones (Android e IOS) con un fin diferente a la compra, venta o arrendamiento del
                inmueble.

                No es permitido extraer información de www.fincaraiz.com.co en su portal web-móvil y/o
                aplicaciones para
                realizar
                construcción de base de datos con fines comerciales y/o difusión masiva de información o
                publicidad.

                No es permitido revender los servicios prestados por www.fincaraiz.com.co en su portal web-móvil
                y/o
                aplicaciones
                (Android e IOS) o utilizarlos para operar como intermediario, canal o medio de comunicación.
                Queda expresamente
                prohibido que EL CLIENTE utilice su oficina virtual, sus cuentas de acceso al PORTAL, o en
                general los servicios
                contratados con www.fincaraiz.com.co, para prestar los mismos servicios a terceras personas,
                bien sea de forma
                gratuita u onerosa, como un servicio independiente o complementario a otras actividades

                No se otorga autorización o licencia para que EL CLIENTE utilice o se aproveche de las marcas,
                signos, nombres
                comerciales o la razón social de EDITORA URBANA LTDA o sus empresas vinculadas; de manera que EL
                CLIENTE no
                podrá
                usar las marcas, signos, nombres comerciales o la razón social de EDITORA URBANA LTDA, incluso a
                través del
                empleo
                de vínculos o enlaces en Internet.


                Facturación:

                EDITORA URBANA LTDA ofrece a través de WWW.FINCARAIZ.COM.CO en su portal web-móvil y/o
                aplicaciones (Android e
                IOS)
                servicios y productos gratuitos y de pago. En este sentido, cuando los servicios y/o productos
                adquiridos por un
                cliente o usuario generen cobros por parte de EDITORA URBANA LTDA, ésta emitirá la
                correspondiente factura, la
                cual,
                de acuerdo a los términos y condiciones aceptados por las partes (EDITORA URBANA LTDA. y el
                usuario persona
                natural
                o jurídica que acepta los términos y condiciones), se realizará bajo el siguiente acuerdo de
                expedición y
                aceptación
                de facturas electrónicas:


                INICIO DE OPERACIONES. Las partes acuerdan que la vigencia de éste inicia con la facturación
                siguiente a la
                fecha en
                que se acepta este acuerdo.

                CAUSALES DE TERMINACIÓN. El presente acuerdo tendrá una duración indefinida. Sin embargo, podrá
                darse por
                terminado
                por cualquiera de las partes, previo aviso dado por escrito a su contraparte con 30 (treinta)
                días calendario de
                anticipación.

                INTERVINIENTES EN EL PROCESO. Los intervinientes en el proceso se definen a continuación:

                EL OBLIGADO A FACTURAR: Es la persona natural o jurídica que conforme a las normas tributarias
                tiene la
                obligación
                de facturar, y que tratándose de la factura electrónica, la expide, generándola y numerándola
                por medio de un
                sistema de facturación por computador en los términos del artículo 13 (3) del Decreto 1165 de
                1996 o las normas
                que
                lo modifiquen, entregándola al adquirente y conservándola para su posterior exhibición, en los
                términos que se
                establecen en Decreto 2242 de 2015 y la Resolución 19 de 2016.

                EL ADQUIRENTE: Es la persona natural o jurídica que como adquirente de bienes o servicios debe
                exigir factura o
                documento equivalente y, que tratándose de la factura electrónica, la acepta y conserva para su
                posterior
                exhibición, en los términos que se establecen en el Decreto 2242 de 2015 y la Resolución 19 de
                2016.

                EL PROVEEDOR TECNOLÓGICO: Es una persona jurídica cuya razón social es: F&M Technology y
                NIT:900306823, que
                presta
                al OBLIGADO A FACTURAR, los servicios inherentes al proceso de facturación, tales como:
                expedición, entrega,
                aceptación/rechazo, conservación y exhibición, cumpliendo todos los requisitos y condiciones
                exigidos en el
                Decreto
                2242 de 2015 y la Resolución 19 de 2016.

                En todo caso el obligado a facturar y el adquirente son los responsables frente a la Dirección
                de Impuestos y
                Aduanas Nacionales por las obligaciones que como tales les corresponden. EL PROVEEDOR
                TECNOLÓGICO realizará los
                procedimientos de expedición (generación), entrega, aceptación y conservación, incluyendo el
                procedimiento de
                exhibición mediante el portal informático o Software e-Bill. Estos procedimientos realizados por
                EL PROVEEDOR
                TECNOLÓGICO cuentan con la certificación ISO 9001: 2008 No: CO10/3616 e ISO 27001: 2013 No:
                CO16/00428, otorgada
                y
                vigente por organismos acreditados por la Superintendencia de Industria y Comercio, a decir SGS
                Colombia S.A. y
                Bureau Veritas.


                PROCEDIMIENTOS DE EXPEDICIÓN, ENTREGA, ACEPTACIÓN/RECHAZO, CONSERVACIÓN Y EXHIBICIÓN: EL
                PROVEEDOR TECNOLÓGICO
                ofrece a EL OBLIGADO A FACTURAR y a EL ADQUIRENTE un servicio virtual (portal e-Bill) a través
                del cual éstos
                podrán
                llevar a cabo las siguientes operaciones haciendo uso de los identificadores de usuario y clave
                que les serán
                asignadas, realizando un procedimiento de autenticación SSO.

                PROCEDIMIENTO DE CONTINGENCIA APLICABLE: Cuando se presenten situaciones que no permitan llevar
                a cabo los
                procedimientos de factura electrónica, EL OBLIGADO A FACTURAR tiene definidos procedimientos
                manuales usando el
                prefijo establecido por la DIAN.

                RESPONSABILIDADES: Es responsabilidad de EL ADQUIRENTE rechazar la factura por los medios
                disponibles por este
                último (correo electrónico) y/o los medios que EL OBLIGADO A FACTURAR le comunique a EL
                ADQUIRENTE son oficiales
                para este trámite. Sin perjuicio de lo establecido en la Ley 1231 de 2008 y su Decreto
                Reglamentario número 3323
                de
                2009 y de acuerdo con lo establecido en la Ley 1676 de 2013, particularmente lo contenido en el
                artículo 86 de
                esta
                última Ley, el cual modificó el inciso tercero del artículo segundo de la Ley 1231 de 2008, si
                el adquirente
                dentro
                de los tres (3) días hábiles siguientes al recibo de la factura no reclamare en contra de su
                contenido, se
                entenderá
                que la misma es irrevocable y tácitamente aceptada. En este sentido, el obligado a facturar,
                declara bajo la
                gravedad del juramento que para efectos de endoso de la factura, se aplicaron los presupuestos
                de la aceptación
                tácita.

                El acuerdo de facturación se hará vigente desde el momento de la aceptación de los términos y
                condiciones del
                portal
                por parte del usuario – ADQUIRENTE.

                La plataforma podrá poner a su disposición métodos de pago electrónicos para el pago de los
                servicios
                contratados,
                dichos métodos de pago corresponden a páginas especializadas administradas por terceros con
                reconocimiento en el
                mercado. Editora Urbana Ltda no será responsable de ninguna de las operaciones que EL USUARIO
                efectúe estando
                dentro
                de las plataformas de pago administradas que son por terceros ajenos a Editora Urbana.
            </p>
        </div>
    @endguest



    @include('layouts.footers.auth.footer')
@endsection
