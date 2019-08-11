$(document).scroll(function(){
		if($(document).scrollTop()>200)
			$('#photoses').addClass("navigarttwq12") && $('#photoses').css('transition', 'all .8s ease') ;
		else
			$('#photoses').removeClass("navigarttwq12") && $('#photoses').css('transition', 'all .8s ease');
});
$('#photoses').click(function(){
	$('html,body').animate({scrollTop:0}, 1300);

});

$(document).ready(function(){
    $("#menu").on("click","a", function (event) {
        //отменяем стандартную обработку нажатия по ссылке
        event.preventDefault();
        //забираем идентификатор бока с атрибута href
        var id  = $(this).attr('href'),
        //узнаем высоту от начала страницы до блока на который ссылается якорь
            top = $(id).offset().top;
        //анимируем переход на расстояние - top за 1500 мс
        $('body,html').animate({scrollTop: top}, 1500);
    });
});

	$('#buttonforregister').click(function(){
			var passwordq = $('#passwordvalid').val();
			var passwordq1 = $('#passwordvalid1').val();
			var emailvalid1 = $('#emailvalid').val();
			if(passwordq.length < 6 || passwordq!=passwordq1 || emailvalid1.search('@')<= -1 ||  emailvalid1.indexOf('.') ==-1 )
					$('#emailvalid').addClass("borderform") &&
					$('#passwordvalid').addClass("borderform") &&
					$('#passwordvalid1').addClass("borderform") &&
					$('.heyguyyyq').addClass("heyguyyyq1") &&
					$('#passwordvalid').attr("placeholder","Porolb dolzen bit bolshe 6 simvolov") &&
					$('#passwordvalid1').attr("placeholder","Poroli ne sovpadaut") &&
					$('#emailvalid').attr("placeholder","Mail dolze sodergat @, .")
			else
					$('#passwordvalid').removeClass("borderform") &&
					$('#passwordvalid1').removeClass("borderform") &&
					$('.heyguyyyq').removeClass("heyguyyyq1") &&
					$('#emailvalid').removeClass("borderform")&&
						Registration();
						$('#newformaforevar')[0].reset();

			


		});



function Registration(){
		$.ajax({
				method:"POST",
				url:'/registraq',
				cache:false,
				data:$('#newformaforevar').serialize(),
				statusCode:{
					418:function(){
						window.alert("Oshibochka")
					}
				},
				saccess:function(datas){
					console.log("normalin")

				}

		});

};



$('#yolo12').click(function(){
	if($('#next31').is(':visible'))
		$('#next31').hide() && $('#next31').css('transition', 'all .8s ease');
	else
		$('#next31').show() && $('#next31').css('transition', 'all .8s ease');


});
window.onresize = function(event){
	$('#next31').hide();	
};


	var newApp = angular.module('newApp', []);
	newApp.controller('newController', function($scope,$http){
		$http.get('js/katalogkrosovok/json.json').success(function(data,status,headers,config){
			$scope.massive = data;
		});

		$http.get('js/katalogkrosovok/json1.json').success(function(data,status,headers,config){
			$scope.massive1 = data;

		});
		$http.get('js/katalogkrosovok/json2.json').success(function(data,status,headers,config){
			$scope.massive2 = data;
		});
		$scope.SortFile = undefined;
		$scope.reverse = false;
		$scope.sort = function(hellowmid){
			if($scope.SortFile === hellowmid ){
				$scope.reverse != $scope.reverse;
			}
			else 
				$scope.SortFile = hellowmid;
				$scope.reverse = false;
		}
	})


