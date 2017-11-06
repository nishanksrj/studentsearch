function working(id){
	var filterdata = $("#form").serialize();
$.ajax({
                    type: "POST",
                    url: 'http://localhost/log.php',
                    data: filterdata,
                    success: function(data)
                    { 
					$('#block').html(data);
                    }
        });
}
function imgerror(image){
    image.onerror = "";
    image.src = "http://home.iitk.ac.in/~nishankm/default.png";
    return true;
}
function mdm(i){
var one=document.getElementsByClassName('one');
var two=document.getElementsByClassName('two');
var whole=document.getElementsByClassName('whole');
whole[i].style.display="block";
one[i].style.display="block";
two[i].style.display="block";
}
window.onclick = function(event) {
var whole=document.getElementsByClassName('whole');
var one=document.getElementsByClassName('one');
var two=document.getElementsByClassName('two');
  for(var i=0;i<whole.length;i++)
    if (event.target == whole[i]) {
        whole[i].style.display = "none";
		one[i].style.display="none";
		two[i].style.display="none";
    }
}
function prev(i){
	var one=document.getElementsByClassName('one');
	var two=document.getElementsByClassName('two');
	var whole=document.getElementsByClassName('whole');
	whole[i].style.display="none";
	one[i].style.display="none";
	two[i].style.display="none";
	i--;
	whole[i].style.display="block";
	one[i].style.display="block";
	two[i].style.display="block";
}
function next(i){
	var one=document.getElementsByClassName('one');
	var two=document.getElementsByClassName('two');
	var whole=document.getElementsByClassName('whole');
	whole[i].style.display="none";
	one[i].style.display="none";
	two[i].style.display="none";
	i++;
	whole[i].style.display="block";
	one[i].style.display="block";
	two[i].style.display="block";
}
