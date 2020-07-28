$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});

var revenueChange = function(myData) {
    if ($('#kt_chart_revenue_change').length == 0) {
        return;
    }

    Morris.Donut({
        element: 'kt_chart_revenue_change',
        data: myData,
        colors: [
            '#29C7A6',
            '#F16D1F',
            '#FBA941',
            '#8CC740'
        ],
    });
}

var dailySales = function(elem,labels,data) {
    if (elem.length == 0) {
        return;
    }

    var chart = new Chart(elem, {
        type: 'bar',
        data: {
	        labels: labels,
	        datasets: [{
	            data: data,
	            backgroundColor: [
	                '#F14441',
	                '#F14441',
	                '#F14441',
	                '#F14441',
	                '#F14441',
	                '#F14441',
	                '#F14441',
	            ],
	            borderWidth: 0
	        }]
	    },
	    options: {
	    	responsive: true,
	        scales: {
	            yAxes: [{
	                display: false,
                    gridLines: false,
                    stacked: true
	            }],
	            xAxes: [{
		            barPercentage: 0.4,
		            gridLines: {
		                display: false,
		            },
		            ticks: {
			          fontColor: "black",
			          fontSize: 20,
			          autoSkip: false,
			        },
		        }],
	        },
	        layout: {
                padding: {
                    left: 0,
                    right: 0,
                    top: 0,
                    bottom: 0
                },
            },
            title: {
                display: false,
            },
            legend:{
            	display: false,
            },
            tooltips: {
                callbacks: {
                    label: function(tooltipItem, data) {
                        return "$ " + tooltipItem.yLabel;
                    }
                }
            }
	    },
    });
}

var _initSparklineChart = function(src, data, color, border) {
    if (src.length == 0) {
        return;
    }

    var config = {
        type: 'line',
        data: {
            labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October"],
            datasets: [{
                label: "",
                borderColor: color,
                borderWidth: border,

                pointHoverRadius: 4,
                pointHoverBorderWidth: 12,
                pointBackgroundColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                pointBorderColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                pointHoverBackgroundColor: '#F14441',
                pointHoverBorderColor: Chart.helpers.color('#000000').alpha(0.1).rgbString(),
                fill: false,
                data: data,
            }]
        },
        options: {
            title: {
                display: false,
            },
            tooltips: {
                enabled: false,
                intersect: false,
                mode: 'nearest',
                xPadding: 10,
                yPadding: 10,
                caretPadding: 10
            },
            legend: {
                display: false,
                labels: {
                    usePointStyle: false
                }
            },
            responsive: true,
            maintainAspectRatio: true,
            hover: {
                mode: 'index'
            },
            scales: {
                xAxes: [{
                    display: false,
                    gridLines: false,
                    scaleLabel: {
                        display: true,
                        labelString: 'Month'
                    }
                }],
                yAxes: [{
                    display: false,
                    gridLines: false,
                    scaleLabel: {
                        display: true,
                        labelString: 'Value'
                    },
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },

            elements: {
                point: {
                    radius: 4,
                    borderWidth: 12
                },
            },

            layout: {
                padding: {
                    left: 0,
                    right: 10,
                    top: 5,
                    bottom: 0
                }
            }
        }
    };

    return new Chart(src, config);
}

function setCookie(key, value, expiry) {
    var expires = new Date();
    expires.setTime(expires.getTime() + (expiry * 60 * 60 * 1000)); // Expires in hours
    document.cookie = key + '=' + value + ';expires=' + expires.toUTCString();
}

function getCookie(key) {
    var keyValue = document.cookie.match('(^|;) ?' + key + '=([^;]*)(;|$)');
    return keyValue ? keyValue[2] : null;
}

function removeCookie(key) {
    var keyValue = getCookie(key);
    setCookie(key, keyValue, '-1');
}

$(function(){
	// dailySales($('#myChart'),['M', 'T', 'W', 'T', 'F', 'S' , 'S'],[12, 19, 3, 5, 2, 3,20]);
	// dailySales($('#myChart2'));

    // $('#example').DataTable();

	$('.datepicker').datetimepicker({
        format: 'DD/MM/YYYY',
    });

    _initSparklineChart($('#kt_chart_quick_stats'), [8, 18, -12, 12 , -2, -14, 2], '#F55249', 2);
    _initSparklineChart($('#kt_chart_quick_stats_2'), [8, 18, -12, 12, -2, -14, 2], '#F55249', 2);
    _initSparklineChart($('#kt_chart_quick_stats_3'), [8, 18, -12, 12, -2, -14, 2], '#41C719', 2);
    _initSparklineChart($('#kt_chart_quick_stats_4'), [8, 18, -12, 12, -2, -14, 2], '#F64000', 2);
    _initSparklineChart($('#kt_chart_quick_stats_5'), [8, 18, -12, 12, -2, -14, 2], '#22637d', 2);
	
	$('div.actions .dropdown button').on('click',function(){
		var elem = $(this).siblings('div.menu');
		elem.slideToggle(500);
	});

    // var mySwiper = new Swiper('.swiper-container', {
    //   // Optional parameters
    //   direction: 'horizontal',
    //   loop: false,
    //   slidesPerView: 10,
      
    //   // initialSlide:0,

    //   // If we need pagination
    //   pagination: {
    //     el: '.swiper-pagination',
    //   },

    //   // Navigation arrows
    //   navigation: {
    //     nextEl: '.swiper-button-next',
    //     prevEl: '.swiper-button-prev',
    //   },

    //   // And if we need scrollbar
    //   scrollbar: {
    //     el: '.swiper-scrollbar',
    //   },
    // });

    $('.nav-link').on('click',function(){
        $(this).addClass('active').siblings().removeClass('active');
        if($(window).width() >= 1200){
            if($(this).hasClass('first-li')){
              $('html, body').animate({
                  scrollTop: 0    
              }, 800, 'linear');
            }else{
              $('html, body').animate({
                scrollTop: $('#' + $(this).data('animate')).offset().top - 250  
              }, 800, 'linear');
            }
        }else{
            if($(this).hasClass('first-li')){
              $('html, body').animate({
                  scrollTop: 0    
              }, 800, 'linear');
            }else{
              $('html, body').animate({
                scrollTop: $('#' + $(this).data('animate')).offset().top - 150  
              }, 800, 'linear');
            }
        }
    });

    $(window).on('scroll',function(){
        if($(this).scrollTop() == 0){
            $('.navbar').removeClass('scrolled'); 
        }else{
            $('.navbar').addClass('scrolled');
        }
    });

    $(window).on('load',function(){
        if($(window).width() <= 991){
            var myString = $('#features .first-col').clone();
            var myString2 = $('#blog .first-col').clone();
            $('#features .first-col').remove();
            $('#blog .first-col').remove();
            $('#features').append(myString);
            $('#blog').append(myString2);
        }
    });

    $('.logout').on('click',function(e){
        e.preventDefault();
        e.stopPropagation();
        removeCookie('login_auth');
        window.location.href="/login";
    });

});