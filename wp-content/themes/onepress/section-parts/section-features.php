<?php
$id       = get_theme_mod( 'onepress_features_id', esc_html__('features', 'onepress') );
$disable  = get_theme_mod( 'onepress_features_disable' ) == 1 ? true : false;
$title    = get_theme_mod( 'onepress_features_title', esc_html__('Features', 'onepress' ));
$subtitle = get_theme_mod( 'onepress_features_subtitle', esc_html__('Why choose Us', 'onepress' ));
if ( onepress_is_selective_refresh() ) {
    $disable = false;
}
$data  = onepress_get_features_data();
if ( !$disable && !empty( $data ) ) {
    $desc = get_theme_mod( 'onepress_features_desc' );
?>
<?php if ( ! onepress_is_selective_refresh() ){ ?>
<section id="<?php if ( $id != '') echo $id; ?>" <?php do_action('onepress_section_atts', 'features'); ?>
         class="<?php echo esc_attr(apply_filters('onepress_section_class', 'section-features section-padding section-meta onepage-section', 'features')); ?>">
<?php } ?>
    <?php do_action('onepress_section_before_inner', 'features'); ?>
    <div class="container">
        <?php if ( $title ||  $subtitle || $desc ){ ?>
        <div class="section-title-area">
            <?php if ($subtitle != '') echo '<h5 class="section-subtitle">' . esc_html($subtitle) . '</h5>'; ?>
            <?php if ($title != '') echo '<h2 class="section-title">' . esc_html($title) . '</h2>'; ?>
            <?php if ( $desc ) {
                echo '<div class="section-desc">' . apply_filters( 'onepress_the_content', wp_kses_post( $desc ) ) . '</div>';
            } ?>
        </div>
        <?php } ?>
        <div class="section-content">
            <div class="row">
            <?php
            $layout = intval( get_theme_mod( 'onepress_features_layout', 3 ) );
            foreach ( $data as $k => $f ) {
                $media = '';
                $f =  wp_parse_args( $f, array(
                    'icon_type' => 'icon',
                    'icon' => 'gg',
                    'image' => '',
                    'link' => '',
                    'title' => '',
                    'desc' => '',
                ) );
                if ( $f['icon_type'] == 'image' && $f['image'] ){
                    $url = onepress_get_media_url( $f['image'] );
                    if ( $url ) {
                        $media = '<span class="icon-image"><img src="'.esc_url( $url ).'" alt=""></span>';
                    }
                } else if ( $f['icon'] ) {
                    $f['icon'] = trim( $f['icon'] );
                    $media = '<span class="fa-stack fa-5x"><i class="fa fa-circle fa-stack-2x icon-background-default"></i> <i class="feature-icon fa '.esc_attr( $f['icon'] ).' fa-stack-1x"></i></span>';
                }

                ?>
                <div class="feature-item col-lg-<?php echo esc_attr( $layout ); ?> col-sm-6 wow slideInUp">
                    <div class="feature-media">
                        <?php if ( $f['link'] ) { ?><a href="<?php echo esc_url( $f['link']  ); ?>"><?php } ?>
                        <?php echo $media; ?>
                        <?php if ( $f['link'] )  { ?></a><?php } ?>
                    </div>
                    <h4><?php if ( $f['link'] ) { ?><a href="<?php echo esc_url( $f['link']  ); ?>"><?php } ?><?php echo esc_html( $f['title'] ); ?><?php if ( $f['link'] )  { ?></a><?php } ?></h4>
                    <div class="feature-item-content"><?php echo apply_filters( 'the_content', $f['desc'] ); ?></div>
                </div>
            <?php
            }// end loop featues

            ?>
            </div>
        </div>
    </div>
    <?php do_action('onepress_section_after_inner', 'features'); ?>

<?php if ( ! onepress_is_selective_refresh() ){ ?>
</section>
<?php } ?>
<?php } ?>




<section id="¿Qué es?" class="section-features section-padding section-meta onepage-section">
<div class="container">
<div class="section-title-area">
<h2 class="section-title">Ventajas</h2>
<div class="section-desc">
<p>
En sostenibl.es puedes aumentar tu <span class="color-logo"> visibilidad </span> y destacar en tu sector, conocer <span class="color-logo">innovación</span> y buenas prácticas aplicables a tu negocio y encontrar <span class="color-logo">sinergias</span> con nuevos clientes o proveedores.
</br>
</p>
<p>
</br>
<span class="color-logo">Escoge tu área de negocio </span> y descubre las ventajas de formar parte de la red sostenibl.es:
</p>
</div>
</div>



<div id="contenedor">

    <input id="tab-1" type="radio" name="radio-set" class="tab-selector-1" checked="checked" />
    <label for="tab-1" class="tab-label-1">	<div class="imagen-act1"><div class="texto-act">producción</div></div></label>

    <input id="tab-2" type="radio" name="radio-set" class="tab-selector-2" />
    <label for="tab-2" class="tab-label-2"><div class="imagen-act2"><div class="texto-act">elaboración</div></div></label>
   
    <input id="tab-3" type="radio" name="radio-set" class="tab-selector-3" />
    <label for="tab-3" class="tab-label-3"><div class="imagen-act3"><div class="texto-act">distribución</div></div></label>
   
    <input id="tab-4" type="radio" name="radio-set" class="tab-selector-4" />
    <label for="tab-4" class="tab-label-4"><div class="imagen-act4"><div class="texto-act">restauración</div></div></label>
                           
    <input id="tab-5" type="radio" name="radio-set" class="tab-selector-5" />
    <label for="tab-5" class="tab-label-5"><div class="imagen-act5"><div class="texto-act">servicios</div></div></label>						   


    <div class="content">
        <div class="content-2">            
			 <table class="tabla-1-act">
			  <tr style="width:100%">
				<th style="    font-size: 10px;
    font-weight: 100;
    padding: 25px;
    text-align: center;
    width: 20%;">
				Agricultor@s, ganader@s, pescador@s comprometidos con valores de sostenibilidad medioambiental y social.</th>
				<th style="    font-size: 10px;
    font-weight: 100;
    padding: 25px;
    text-align: center;
     width:80%">				
				<span style="    font-weight: bold;font-size:14px; text-align:center;">
				TU PERFIL
				</span>
				<br/>
				<br/>				
				Si eres:
				<br/>
				<br/>
							
				<span style="text-align:left;">
				- Productor/a certificado de agricultura ecológica, ganadería y acuicultura ecológica,
				pesca sostenible
				</span>
				<br/>
				<br/>
				- Productor/a con sellos de calidad locales, regionales y/o denominaciones de origen
				<br/>
				<br/>
				- Productor/a con iniciativas para mejorar tu impacto ambiental y social			
				<br/>
				<br/>				
				</th>
			  </tr>
			 </table>
			 
             <div style="text-align:center">
			 VENTAJAS
			 </div>			
			 <table style="width:100%;">
			  <tr style="width:100%">
				<th style="width:1%; text-align:center;"></th>
				<th class="celda-verde"><h3>VENTAS:</h3>
					</br>
					</br>
					 Amplía tu cartera de clientes y distribuidores con el directorio y con nuestro servicio premium
					de matching*.								
				</th>
				<th style="width:1%; text-align:center;"></th>				
				<th class="celda-verde"><h3>VISIBILIDAD:</h3>
					</br>
					</br>
					Creamos contenidos y promocionamos tu negocio en la red sostenibl.es y en medios
					colaboradores*.								
				</th>
				<th style="width:1%; text-align:center;"></th>				
				<th class="celda-verde"><h3>INNOVACIÓN:</h3>
					</br>
					</br>
					 Conoce buenas prácticas y experiencias de éxito que puedes incorporar en tu empresa
					para avanzar tu sostenibilidad.								
				</th>
				<th style="width:1%; text-align:center;"></th>				
				<th class="celda-verde"><h3>SERVICIOS:</h3>
					</br>
					</br>
					 Encuentra lo que necesitas en cada etapa productiva en el directorio, y benefíciate de
					descuentos para miembros de la red.								
				</th>	
				<th style="width:1%; text-align:center;"></th>				
				<th class="celda-verde"><h3>COMUNIDAD:</h3>
					</br>
					</br>
					Conecta con otras empresas , participa en eventos sostenibl.es, y amplía tu red de
					contactos.								
				</th>			
				<th style="width:1%; text-align:center;"></th>				
			  </tr>			  
			</table> 	

			
        </div>
        <div class="content-1">
			 <table class="tabla-1-act">
			  <tr style="width:100%">
				<th style="    font-size: 13px;
    font-weight: 100;
    padding: 25px;
    text-align: center;
    width: 30%; ">
Si eres:
</br>
</br>
</br>
✓ Productor/a certificado de
agricultura ecológica, ganadería y
acuicultura ecológica, pesca sostenible
</br>
</br>
</br>
✓ Productor/a con sellos de calidad
locales, regionales y/o
denominaciones de origen
</br>
</br>
</br>
✓ Productor/a con iniciativas para
mejorar tu impacto ambiental y social

</th>
				<th style="    font-size: 10px;
    font-weight: 100;
    padding: 25px;
    text-align: center;
     width:70%; background:#ffffff; box-shadow: 0 3px 8px -7px #000; border: 1px solid #eee;">				





			 <table class="tabla-1-act">
			  <tr style="width:100%;">					
				
				<th style="width:50%;     font-weight: 100; padding: 5%;">								
<img class="" style="    height: auto;
    min-width: 70px;
    vertical-align: middle;
    width: 20%;" alt="" src="http://www.sostenibl.es/wp-content/img/ventajas-1.png">
</br>
</br>
<strong>VENTAS</strong>
</br>
Consigue clientes y distribuidores
con el directorio y con nuestro
servicio premium de matching*.				
				</th>
				
				<th style="width:50%;     font-weight: 100; padding: 5%;">			

<img class="" style="    height: auto;
    min-width: 70px;
    vertical-align: middle;
    width: 20%;" alt="" src="http://www.sostenibl.es/wp-content/img/ventajas-2.png">
</br>
</br>	
<strong>VISIBILIDAD</strong>
</br>
Promocionamos tu negocio en la
red sostenibl.es y en medios
colaboradores*.
				</th>				
			  </tr>
			  
			  <tr style="width:100%">					
				
				<th style="width:50%;     font-weight: 100; padding: 5%;">								
<img class="" style="    height: auto;
    min-width: 70px;
    vertical-align: middle;
    width: 20%;" alt="" src="http://www.sostenibl.es/wp-content/img/ventajas-3.png">
</br>
</br>
<strong>INNOVACIÓN</strong>
</br>
Conoce buenas prácticas que
puedes incorporar en tu empresa
para avanzar tu sostenibilidad		
				</th>
				
				<th style="width:50%;     font-weight: 100; padding: 5%;">				
<img class="" style="    height: auto;
    min-width: 70px;
    vertical-align: middle;
    width: 20%;" alt="" src="http://www.sostenibl.es/wp-content/img/ventajas-4.png">
</br>
</br>
<strong>COMUNIDAD</strong>
</br>
Conecta con otras empresas ,
participa en eventos sostenibl.es,
amplía tu red de contactos. 
				</th>				
			  </tr>			  
			 </table>	 
				</th>
			  </tr>
			 </table>			
        </div>
        <div class="content-3">
            Contenido3
        </div>
        <div class="content-4">
            Contenido4
        </div>
        <div class="content-5">
            Contenido5
        </div>	
    </div>

</div>	
</div>

<section id="Como funciona" class="section-services section-padding section-meta onepage-section">
<div class="container">
<div class="section-title-area">
<h2 class="section-title">¿Cómo funciona?</h2>
<div class="section-desc">
<p>
La red sostenibl.
<span class="color-logo">es</span>
está abierta a micro, pequeñas y medianas empresas en el sector agroalimentario ecológico y sostenible.
<br>
<br>
Consulta si reúnes los requisitos aquí, y solicita tu inscripción.
</p>
</div>
</div>
<div class="row">
<div class="col-sm-6 col-lg-6 wow slideInUp" style="visibility: visible; animation-name: slideInUp;">
<div class="service-item ">
<div class="service-image">
<i class="fa fa  fa-5x" style="font-family: montserrat;">1</i>
</div>
<div class="service-content">
<h4 class="service-title">Solicita tu inscripción</h4>
<p>Solicita tu inscripción antes del 30 de septiembre y disfruta de 3 meses gratis y sin compromiso en la red sostenibl.es*</p>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-6 wow slideInUp" style="visibility: visible; animation-name: slideInUp;">
<div class="service-item ">
<div class="service-image">
<i class="fa fa  fa-5x" style="font-family: montserrat;">2</i>
</div>
<div class="service-content">
<h4 class="service-title">Crea tu perfil</h4>
<p>Explora el directorio sostenibl.es y encuentra oportunidades de conectar con empresas afines</p>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-6 clearleft wow slideInUp" style="visibility: visible; animation-name: slideInUp;">
<div class="service-item ">
<div class="service-image">
<i class="fa fa  fa-5x" style="font-family: montserrat;">3</i>
</div>
<div class="service-content">
<h4 class="service-title">Explora y conecta</h4>
<p>Completa tu registro, crea tu perfil de empresa, y nosotros nos encargamos de darte a conocer en la red.</p>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-6 wow slideInUp" style="visibility: visible; animation-name: slideInUp;">
<div class="service-item ">
<div class="service-image">
<i class="fa fa  fa-5x" style="font-family: montserrat;">4</i>
</div>
<div class="service-content">
<h4 class="service-title">Servicios premium**</h4>
<p>Producimos contenido promocional de tu empresa y te ayudamos a encontrar servicios, clientes o proveedores en función de tus necesidades</p>
</div>
</div>
</div>
</div>
</div>
</section>
	

<section id="Invitacion" class="section-services section-padding section-meta onepage-section">

	 
             <div style="text-align:center">
			 </div>			
			 <table style="width:100%; padding:3%;">
			  <tr style="width:100%; box-shadow: -1px 0 4px -2px #444;">						
				<th style="width:50%; height:835px; text-align:center; padding:0px;">
				
				<div class="fondo-suscribeme"><div class="texto-act">restauración</div></div>				
				
				</th>
				<th style="width:50%; text-align:center; background:#fff; height:100%; width:100%;">
<div class="container-suscribeme">
<div class="section-title-area">
<h2 class="section-title">Ventajas</h2>
<div class="section-desc">
<p>
En sostenibl.es puedes aumentar tu <span class="color-logo"> visibilidad </span> y destacar en tu sector, conocer <span class="color-logo">innovación</span> y buenas prácticas aplicables a tu negocio y encontrar <span class="color-logo">sinergias</span> con nuevos clientes o proveedores.
</br>
</p>
<p>
</br>
<span class="color-logo">Escoge tu área de negocio </span> y descubre las ventajas de formar parte de la red sostenibl.es:
</p>
</div>
</div>
				
				
				</th>								
			  </tr>			  
			</table> 		
		
</section>	
	


