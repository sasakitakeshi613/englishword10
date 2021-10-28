$(function(){
	//単発のajaxボタン------------------
	$('#num').on('click', function(){
		let difi = $('input[name=difficult]');
		let val;
		for(let i=0; i < difi.length; i++){
			if($(difi[i]).prop('checked')) val = $(difi[i]).val();
		}
		$.ajax({
			url: 'num1.php',
			type: 'get',
			data: {"d_id": val},
			dataType: 'json',
		})
		.done(function(d){
			$('#word').empty();
			let eng = $('<li>').text(d.english);
			$('#word').append(eng);
			let japa = $('<li>').text(d.japanese).addClass('none');
			$('#word').append(japa);
		})
		.fail(function(){
			alert("NG");
		});
	});
	//--------------------------------
	
	//翻訳機能-------------------------
	$('#translation').on('click', function(){
		$('.none').css('visibility', 'visible');
		$('.none').css('color', 'red');
	});
	//----------------------------------
	
	//10連用のボタンajax------------------
	$('#num10').on('click', function(){
		let difi = $('input[name=difficult]');
		let val;
		for(let i=0; i < difi.length; i++){
			if($(difi[i]).prop('checked')) val = $(difi[i]).val();
		}
		console.log(val);
		$('#word').empty();
		for(let i=0; i < 10; i++){
			$.ajax({
				url: 'num10.php',
				type: 'get',
				data: {"d_id": val},
				dataType: 'json',
			})
			.done(function(d){
					let eng = $('<li>').text(d[i].english);
					$('#word').append(eng);
					let japa = $('<li>').text(d[i].japanese).addClass('none');
					$('#word').append(japa);
			})
			.fail(function(){
				alert("NG");
			});
		}
	});
	//----------------------------------
	
	//登録するかどうかを確認するモーダル用のｊｓ
	$('#submit').on('submit', function(){
		let res = confirm("本当に登録しますか？");
		return res;
	});
	
	//英単語テキストに入力した単語を検索フォームにもってくるjs
	$('#english').keyup(function(){
		let ele = $(this).val();
		$('#search').val(ele);
	});
	//-----------------------------------------
});
