<template>
    <div style="background-color:#2B2B2B">
        <div class="w-full  flex flex-col lg:flex-row" >
        <div class="w-full lg:w-80 imagen-footer  my-10 h-32 text-center">
            <a href="#"><img class="mx-auto  w-1/3" src="/images/Sello 1.png" alt="" srcset=""></a>
        </div>
        <div class="px-10 lg:pt-10 w-full space-y-10 lg:space-y-0  flex flex-col lg:flex-row h-full">
            <div class="iconos-redes text-center lg:text-left w-full lg:w-1/3">
                <h2 class="text-white font-thin">Redes Sociales</h2>
                <div class="flex pt-6 justify-center lg:justify-start space-x-10">
                    <a href="https://www.facebook.com/EXPERTOSENMOTORES"><img class="redes" src="/images/Facebook.png" alt=""></a>
                    <a href=""><img class="redes" src="/images/Instagram.png" alt=""></a>
                </div>
            </div>
            <div class="w-full lg:w-1/3 text-center">
                <h2 class="text-white font-thin">TOTAL MOTOR</h2>
                <div class="menu-footer flex  flex-col space-y-2">
                <a  href="#">Inicio</a>
                <a v-scroll-to="{
                el: '#soluciones',
                duration: 1000}" href="#">Soluciones</a>
                <a v-scroll-to="{
                el: '#promociones',
                duration: 1000}" href="#">Promociones</a>
                <a v-scroll-to="{
                el: '#marcas',
                duration: 1000}" href="#">Marcas</a>
                <a v-scroll-to="{
                el: '#formulario',
                duration: 1000}" href="#">Contacto</a>
                </div>
            </div>
            <div class="w-full lg:w-1/3">
                <h2 class="text-white text-center font-thin">Informacion</h2>
                <div class="menu-footer flex items-center lg:items-start lg:pl-10 flex-col space-y-2">
                <button @click="showTerminos" href="">Términos y Condiciones de uso</button>
                <button @click="showPrivacidad" href="">Aviso de priviacidad</button>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full mt-20 px-20 creditos text-center flex items-center justify-center lg:h-10">
        <h2 class="text-sm lg:text-md text-white font-thin text-white">Diseño por SELLO DIGITAL, Desarrollo por GAMMA</h2>
    </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            avisoPrivacidad:"<p>Mercaei, SA de CV, con domicilio en calle Sofia 12, colonia Campestre, Ciudad de M&eacute;xico, delegaci&oacute;n &Aacute;lvaro Obreg&oacute;n, CP 01040, en la entidad CDMX, pa&iacute;s M&eacute;xico, y portal de internet www.mercaei.com.mx, es el responsable del uso y protecci&oacute;n de sus datos personales, y al respecto le informamos lo siguiente: Utilizaremos su informaci&oacute;n personal para la siguiente finalidad: Hacer estudios de mercado, de opini&oacute;n p&uacute;blica o estudios sociales. Para ello, sus datos, junto con los de otras personas a quienes entrevistamos, se analizan de manera agregada, para obtener datos estad&iacute;sticos. Para la finalidad descrita en el presente aviso de privacidad, trataremos los siguientes datos personales: Datos de identificaci&oacute;n Datos de contacto Datos acad&eacute;micos Datos patrimoniales y/o financieros opini&oacute;n H&aacute;bitos de consumo Adicionalmente, para la finalidad referida en el presente aviso de privacidad, en ocasiones solicitaremos los siguientes datos personales considerados como sensibles, que requieren de especial protecci&oacute;n. Datos sobre ideolog&iacute;a; creencias religiosas, filos&oacute;ficas o morales; opiniones pol&iacute;ticas y/o afiliaci&oacute;n sindical, Datos de origen &eacute;tnico o racial, Datos sobre aspectos de salud. Usted tiene derecho a conocer qu&eacute; datos personales tenemos de usted, para que los utilizamos y las condiciones del uso que les damos (Acceso). Asimismo, es su derecho solicitar la correcci&oacute;n de su informaci&oacute;n personal en caso de que este desactualizada, sea inexacta o incompleta (Rectificaci&oacute;n); que la eliminemos de nuestros registros o bases de datos cuando considere que la misma no est&aacute; siendo utilizada adecuadamente (Cancelaci&oacute;n) as&iacute;; como oponerse al uso de sus datos personales para fines espec&iacute;ficos (oposici&oacute;n). Estos derechos se conocen como derechos ARCO y puede ejercerlos en cualquier momento, acorde a los lineamientos legales que para tales fines exista. Para el ejercicio de cualquiera de los derechos ARCO, usted deber&aacute;; presentar la solicitud ante nuestra empresa. Asimismo, para conocer el procedimiento y requisitos para el ejercicio de los derechos ARCO, ponemos a su disposici&oacute;n los siguientes medios: Correo: privacidad@mercaei.com.mx; Domicilio: Calle Sofia 12, Colonia Campestre, delegaci&oacute;n &Aacute;lvaro Obreg&oacute;n, CP. 01040, CDMX Los datos de contacto a quien debe dirigirse para dar tr&aacute;mite a su solicitud de derechos ARCO en nuestra empresa son: Puesto: l&iacute;der de Calidad Domicilio: Calle Sofia 12, Colonia Campestre, delegaci&oacute;n &Aacute;lvaro Obreg&oacute;n, CP. 01040, CDMX Correo electr&oacute;nico: privacidad@mercaei.com.mx N&uacute;mero telef&oacute;nico: 55 5664 1717 Usted puede revocar el consentimiento que, en su caso, nos haya otorgado para el tratamiento de sus datos personales. Sin embargo, es importante que tenga en cuenta que no en todos los casos podremos atender su solicitud o concluir el uso de forma inmediata, ya que es posible que por alguna obligaci&oacute;n legal requiramos seguir tratando sus datos personales. Para revocar su consentimiento deber&aacute;; presentar la solicitud ante nuestra empresa. Asimismo, para conocer el procedimiento y requisitos de revocaci&oacute;n, puede contactarnos a la direcci&oacute;n y tel&eacute;fono antes referidos. Si bien nosotros no hacemos publicidad ni vendemos o promovemos productos incluidos los financieros, nos permitimos compartirle la siguiente referencia en caso de usted decida limitar el uso y divulgaci&oacute;n de su informaci&oacute;n personal: La inscripci&oacute;n en el Registro P&uacute;blico para Evitar Publicidad y el Registro P&uacute;blico de Usuarios. Asimismo, usted se podr&aacute;; inscribir a los siguientes registros: Registro P&uacute;blico para Evitar Publicidad, para mayor informaci&oacute;n el portal de internet de la PROFECO Registro P&uacute;blico de Usuarios, para mayor informaci&oacute;n consulte el portal de internet de la CONDUSEF El presente aviso de privacidad puede sufrir modificaciones, cambios o actualizaciones derivadas de nuevos requerimientos legales, de nuestras propias necesidades por los productos o servicios que ofrecemos, de nuestras pr&aacute;cticas de privacidad, de cambios en nuestro modelo de negocio, o por otras causas. Por lo tanto, nos comprometemos a mantener el aviso de privacidad actualizado sobre los cambios que pueda sufrir, a trav&eacute;s de nuestra p&aacute;gina de Internet: www.mercaei.com.mx Para identificar los cambios o actualizaciones al presente aviso de privacidad verifique la fecha de la &uacute;ltima actualizaci&oacute;n de la de la p&aacute;gina de Internet </p>",
            terminosYCondiciones:"<p>&nbsp;El presente documento tiene la finalidad de regular el uso de este sitio de Internet que REPRESENTACIONES ELZE, S.A. DE C.V. . en adelante &ldquo;La Empresa&rdquo; pone a disposici&oacute;n del p&uacute;blico en general en la http://mercaei.com.mx (en adelante &ldquo;el Sitio&rdquo;), la sola utilizaci&oacute;n de este sitio le otorga la calidad de Usuario y supone su aceptaci&oacute;n plena e incondicional, de todas y cada una de las condiciones generales y particulares incluidas en el presente Aviso Legal. &ldquo;La Empresa&rdquo; puede ofrecer a trav&eacute;s de este Sitio, servicios y/o productos, inform&aacute;ndole al Usuario cada caso en concreto. El contenido de los productos y servicios publicados son estrictamente ilustrativos e informativos y podr&aacute;n cambiar sin previo aviso, y sin incurrir en responsabilidad por parte de La Empresa. &ldquo;La Empresa&rdquo; no ofrece garant&iacute;a respecto de la exactitud y veracidad de la informaci&oacute;n contenida en el Sitio, o que por error y omisi&oacute;n sea incorrecta. Con el objetivo de minimizar los inconvenientes ocasionados al Usuario, se le recomienda que ante cualquier duda se ponga en contacto con el &aacute;rea de atenci&oacute;n a clientes. MODIFICACIONES. &ldquo;La Empresa&rdquo; podr&aacute; realizar modificaciones a los T&Eacute;RMINOS Y CONDICIONES DE USO de este Sitio en cualquier momento que lo considere apropiado, siendo exclusiva responsabilidad del usuario asegurarse de tomar conocimiento de tales modificaciones. Los precios pueden ser modificados en cualquier momento. USO ADECUADO DEL SITIO. El usuario tendr&aacute; derecho de hacer uso de los contenidos del Sitio de conformidad con los T&Eacute;RMINOS Y CONDICIONES DE USO que aqu&iacute; se establecen, entendi&eacute;ndose por &ldquo;contenido&rdquo; a: (1) todos los bienes y productos que ofrezca &ldquo;La Empresa&rdquo; al usuario, a trav&eacute;s de este Sitio, y (2) toda la informaci&oacute;n contenida en el Sitio, incluyendo cualquier texto, fotograf&iacute;as e im&aacute;genes. El Usuario se compromete a utilizar el Sitio de conformidad con el presente Aviso Legal, las Leyes de los Estados Unidos Mexicanos, la legislaci&oacute;n vigente en el pa&iacute;s que el Usuario se encuentre al momento de usarlo, las buenas costumbres, el orden p&uacute;blico y los derechos de terceros. Del mismo modo el Usuario se obliga a no utilizar el Sitio o los servicios que se prestan en &eacute;ste, con fines il&iacute;citos o contrarios al presente Aviso Legal, lesivos de los intereses o derechos de terceros, o que de cualquier forma pueda da&ntilde;ar, inutilizar o deteriorar el Sitio o sus servicios, o impedir un normal disfrute del Sitio a otros Usuarios. El Sitio es de uso personal para el Usuario, por lo que no podr&aacute; comercializar de manera alguna los bienes o servicios contenidos. PROPIEDAD INTELECTUAL O INDUSTRIAL Todas las marcas, nombres comerciales, signos distintivos, logotipos y cualquier otro elemento para distinguir a los productos o bienes (im&aacute;genes, textos, ilustraciones, fotograf&iacute;as, etc.) que se encuentren contenidos actualmente o se inserten en un futuro en el Sitio, son exclusivamente para fines ilustrativos y de comercializaci&oacute;n de los bienes y productos. RESPONSABILIDAD DEL USUARIO. El Usuario es el &uacute;nico responsable de las infracciones en las que pudiera incurrir o de los da&ntilde;os que pudiera ocasionar por el mal uso del Sitio, as&iacute; como de cualquier acci&oacute;n o reclamaci&oacute;n legal, judicial o extrajudicial iniciada por terceras personas en contra de &ldquo;La Empresa&rdquo;, por lo que en su caso, el Usuario se obliga de inmediato reembolsar cualquier cantidad que &eacute;ste &uacute;ltimo se hubiere visto obligado a erogar y a sacar en paz y salvo y a relevar de toda responsabilidad ante cualquier Tribunal o Autoridad a &ldquo;La Empresa&rdquo; por cualquier reclamaci&oacute;n o acci&oacute;n legal instaurada en contra de &ldquo;La Empresa&rdquo;. INTROMISI&Oacute;N DE TERCEROS AL SITIO. &ldquo;La Empresa&rdquo; queda exonerada de cualquier clase de responsabilidad que se pudiera derivar de interrupciones, retrasos, virus inform&aacute;ticos, sobre carga en l&iacute;neas telef&oacute;nicas o en Internet o desconexiones en el funcionamiento del Sitio, motivado por causas ajenas a &ldquo;La Empresa&rdquo;, as&iacute; como de da&ntilde;os y/o intromisiones ileg&iacute;timas causados por terceras personas al Sitio. PRIVACIDAD DE LA INFORMACI&Oacute;N. Sus datos personales est&aacute;n protegidos por nuestro Aviso de Privacidad mismo que podr&aacute;n consultar en nuestra p&aacute;gina web. COOKIES. &ldquo;La Empresa&rdquo; recaba informaci&oacute;n personal del usuario a trav&eacute;s de cookies o web beacons.Mismo que se encuentra establecido en el Aviso de Privacidad. SEGURIDAD. &ldquo;La Empresa&rdquo; garantiza la seguridad de la informaci&oacute;n que se transmite entre el Usuario y el Sitio. ENCABEZADOS. Los encabezados que se incluyen en el presente Aviso Legal, se incluyen &uacute;nicamente como referencia para facilitar su localizaci&oacute;n por parte del Usuario y tanto &ldquo;La Empresa&rdquo; y el Usuario acuerdan que no afectan, interpretan, modifican o limitan en sentido alguno los t&eacute;rminos y condiciones de uso establecidos en el presente Aviso Legal. LEGISLACI&Oacute;N APLICABLE. Para todo lo relacionado con la interpretaci&oacute;n, cumplimiento y ejecuci&oacute;n del presente Aviso Legal, las partes est&aacute;n de acuerdo en someterse a las Leyes y Tribunales competentes de la Ciudad de M&eacute;xico, renunciando expresamente a cualquier otro fuero o jurisdicci&oacute;n que pudiera corresponderles en raz&oacute;n de sus domicilios presentes o futuros. </p>",
        }
    },
    methods: {
        showTerminos(){
        this.$swal(
            {
                icon:'info',
              title:'Terminos y Condiciones',
              html:this.terminosYCondiciones
            }
        )
    },
    showPrivacidad() {
      // Use sweetalert2
      this.$swal(
          {
              icon:'info',
              title:'Política de Privacidad',
              html:this.avisoPrivacidad
          }
      );
    },

    },
}
</script>
<style>

</style>