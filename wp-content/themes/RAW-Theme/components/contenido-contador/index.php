<?php
/**
 * Componente: Contenido Contador.
 *
 * @package Acronyms\RAW
 * @subpackage Components
 * @since 1.0.0
 */

?>
<div class="raw-component contenido-contador">
	<div class="container grid">

		<div>
			<h3><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_contenido-contador_title_1', true ) ) ?: 'Esto cuentan nuestros clientes:'; ?></h3>

			<?php
				print wp_kses_post( get_post_meta( get_the_ID(), 'raw_contenido-contador_video_1', true ) ) ?: '<iframe allowfullscreen="" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" title="ENTREVISTA | José Manuel Sandoval" width="640" height="360" src="https://www.youtube.com/embed/1hA3Ys66ydE?controls=1&amp;rel=0&amp;playsinline=0&amp;modestbranding=0&amp;autoplay=0&amp;enablejsapi=1&amp;origin=https%3A%2F%2Fsmd.ddev.site&amp;widgetid=1" id="widget2"></iframe>';
				print wp_kses_post( get_post_meta( get_the_ID(), 'raw_contenido-contador_video_2', true ) ) ?: '<iframe allowfullscreen="" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" title="ENTREVISTA | Oswaldo Troconis" width="640" height="360" src="https://www.youtube.com/embed/Fh9r3jDb1cA?controls=1&amp;rel=0&amp;playsinline=0&amp;modestbranding=0&amp;autoplay=0&amp;enablejsapi=1&amp;origin=https%3A%2F%2Fsmd.ddev.site&amp;widgetid=3" id="widget4"></iframe>';
			?>
		</div>

		<div>
			<h3><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_contenido-contador_title_2', true ) ) ?: 'Estos son nuestros números:'; ?></h3>
			<p>
				<b><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_contenido-contador_cont_1_numero', true ) ) ?: '4.304'; ?></b>
				<?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_contenido-contador_cont_1_text', true ) ) ?: 'familias que vuelven a respirar'; ?>
			</p>
			<p>
				<b><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_contenido-contador_cont_2_numero', true ) ) ?: '7.269'; ?></b>
				<?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_contenido-contador_cont_2_text', true ) ) ?: 'reclamaciones de intereses usurarios'; ?>
			</p>
			<p>
				<b><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_contenido-contador_cont_3_numero', true ) ) ?: '16.134'; ?></b>
				<?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_contenido-contador_cont_3_text', true ) ) ?: 'deudas liquidadas'; ?>
			</p>
			<p>
				<b><?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_contenido-contador_cont_4_numero', true ) ) ?: '61.536.047'; ?></b>
				<?php print wp_kses_post( get_post_meta( get_the_ID(), 'raw_contenido-contador_cont_4_text', true ) ) ?: 'millones de euros liquidados'; ?>
			</p>
		</div>

	</div>
</div>