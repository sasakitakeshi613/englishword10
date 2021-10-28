$(function(){
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
