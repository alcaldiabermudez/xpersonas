
	</div><!-- cerrar el content -->

	<!-- para separar el content del footer por el float -->
	<div class="clearfix"></div>

	<p class="footer">
		Pagina ejecutada en <strong>{elapsed_time}</strong> segundos
		Usando <strong>{memory_usage}</strong>
	</p>
</div>


	<script>
		var base_url = "<?= base_url(); ?>";
	</script>

<script src="<?= base_url('public/js/jquery.js')?>"></script>
<script src="<?= base_url('public/js/bootstrap.min.js')?>"></script>
<script src="<?= base_url('public/js/main.js') ?>"></script>

</body>
</html>