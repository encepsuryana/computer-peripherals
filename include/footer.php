<div class="container-fluid">
	<footer class="pt-4 my-md-4 pt-md-3">
		<div class="row">
			<div class="col-12 col-md center">

			</div>
		</div>
	</footer>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script type="text/javascript" src="assets/js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="assets/js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<!-- <script type="text/javascript" src="assets/js/materialize-inputs.jquery.js"></script> -->
<script type="text/javascript" src="assets/js/mask.ip-input.js"></script>
<script type="text/javascript" src="assets/js/app.js"></script>
<script type="text/javascript" src="assets/js/show-hide-password.js"></script>
<!-- fontawesome Plugin JS -->
<script type="text/javascript" src="assets/plugins/fontawesome-free-5.4.1-web/js/all.min.js"></script>
<!-- DataTables Plugin JS -->
<script type="text/javascript" src="assets/plugins/DataTables/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="assets/plugins/DataTables/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="assets/plugins/DataTables/js/dataTables.select.min.js"></script>
<script type="text/javascript" src="assets/plugins/DataTables/js/dataTables.editor.min.js"></script>
<script type="text/javascript" src="assets/plugins/DataTables/js/dataTables.fixedColumns.min.js"></script>

<!-- datepicker Plugin JS -->
<script type="text/javascript" src="assets/plugins/datepicker/js/bootstrap-datepicker.min.js"></script>
<!-- SweetAlert Plugin JS -->
<script type="text/javascript" src="assets/plugins/sweetalert/js/sweetalert.min.js"></script>
<!-- Multiple Select Plugin JS -->
<script type="text/javascript" src="assets/plugins/multiple-select/js/multiple-select.js"></script>
<!-- DataTables altEditor Select Plugin JS -->
<script type="text/javascript" src="assets/plugins/multiple-select/js/dataTables.altEditor.free.js"></script>

<!-- custom JS -->
<script type="text/javascript">
	//Mac Address Format Function
	var macAddress_add  = document.getElementById("mac_address_add");
	var macAddress_edit = document.getElementById("mac_address_edit");
	function formatMAC(e) {
		var r = /([a-f0-9]{2})([a-f0-9]{2})/i,
		str = e.target.value.replace(/[^a-f0-9]/ig, "");

		while (r.test(str)) {
			str = str.replace(r, '$1' + ':' + '$2');
		}
		e.target.value = str.slice(0, 17);
	};
	macAddress_add.addEventListener("keyup", formatMAC, false);
	macAddress_edit.addEventListener("keyup", formatMAC, false);

	//Password Hide format Function
	$('#password_add').showPassword('focus', {
		toggle: { className: 'my-toggle' }
	});

	$('#password_edit').showPassword('focus', {
		toggle: { className: 'my-toggle' }
	});


	// Kode Asset Format Function
	function reverseNumber(input) {
		return [].map.call(input, function(x) {
			return x;
		}).reverse().join(''); 
	}

	function plainNumber(number) {
		return number.split('.').join('');
	}

	function splitInDots(input) {
		var value = input.value,
		plain = plainNumber(value),
		reversed = reverseNumber(plain),
		reversedWithDots = reversed.match(/.{1,3}/g).join('.'),
		normal = reverseNumber(reversedWithDots);

		console.log(plain,reversed, reversedWithDots, normal);
		input.value = normal;
	}
</script>