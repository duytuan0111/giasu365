

	$(document).ready(function () {
		// keyup input
		$('.d-search').keyup(function (event) {
			event.preventDefault();
			$('.d-input-none').css("display", "block");
			$('.t-recomend-search').css("display", "block");
            $('.d-search-city-none').css("display", "none");
			$('.d-select-none').css("display", "none");
		});
		$('.d-search').focus(function (event) {
			event.preventDefault();
			$('.d-input-none').css("display", "block");
			$('.t-recomend-search').css("display", "none");
			$('.d-search-city-none').css("display", "none");
			$('.d-select-none').css("display", "none");
		});

		if ($('.d-search')=='') {
			// keyup select-city
			$('.d-search-city').keyup(function (event) {
				event.preventDefault();
				$('.d-search-city-none').css("display", "block");
				$('.d-input-none').css("display", "none");
				// $('.t-recomend-search').css("display", "block");
			});
			$('.d-search-city').focus(function (event) {
				event.preventDefault();
				$('.d-search-city-none').css("display", "block");
				$('.d-input-none').css("display", "none");
				// $('.t-recomend-search').css("display", "block");
			});
		} else {
			// keyup select
			$('.d-search-city').keyup(function (event) {
				event.preventDefault();
				$('.d-select-none').css("display", "block");
				$('.d-input-none').css("display", "none");
                $('.t-recomend-search').css("display", "none");
			});
			$('.d-search-city').focus(function (event) {
				event.preventDefault();
				$('.d-select-none').css("display", "block");
				$('.t-recomend-search').css("display", "none");
				$('.d-input-none').css("display", "none");
			});
		}

		// $('#modal-id').modal('show');
		$('body').on('click', '#file-img', function (event) {
			$('#img-avt').trigger('click');
		});
		$('.click-a').on('click', function () {
			// $('.d-input-none').css("display", "block");

			var a = $(this).text();
			$('.d-search').val(a);

			if ($('.d-search') == '') {
				$('.d-input-none').css("display", "block");
				$('.d-select-none').css("display", "none");
				$('.d-search-city-none').css("display", "none");
			} else {
				$('.d-search-city-none').css("display", "block");
				$('.d-select-none').css("display", "none");
				$('.d-input-none').css("display", "none");
            }
            
		});
		$('.click-2').on('click', function () {
			// $('.d-select-none').css("display", "block");
			var a = $(this).text();
			$('.d-search-city').val(a);

			if ($('.d-search') == '') {
				$('.d-search-city-none').css("display", "none");
				$('.d-select-none').css("display", "block");
			} else {
				$('.d-select-none').css("display", "none");
				$('.d-search-city-none').css("display", "none");
				$('.t-recomend-search').css("display", "block");
			}
		});
		$('.click-3').on('click', function () {
			// $('.d-search-city-none').css("display", "block");

			var a = $(this).text();
			$('.d-search-city').val(a);

			if ($('.d-search') == '') {
				$('.d-search-city-none').css("display", "none");
				$('.d-select-none').css("display", "block");
			} else {
				$('.d-search-city-none').css("display", "none");
				$('.d-select-none').css("display", "none");
				$('.t-recomend-search').css("display", "block");
			}
		});
	});
