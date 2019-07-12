$(document).ready(function()
		{
			$('#no').click(function(){
				$("#li").hide();
			});
			$("#yes").click(function(){
				$("#li").show();
			});
		})

$(document).ready(function()
		{
			$('#sameaddr').click(function(){
				$("#permanent").hide();
			});
			$("#notsame").click(function(){
				$("#permanent").show();
			});
		})

function GetDays(){
                var dropdt = new Date(document.getElementById("leavedate").value);
                var pickdt = new Date(document.getElementById("returndate").value);
                return parseInt((pickdt - dropdt) / (24 * 3600 * 1000));
        }

        function cal(){
        if(document.getElementById("leavedate")){
            document.getElementById("numdays2").value=GetDays();
        }  
    }

$(document).ready(function()
		{
			$('#indian').click(function(){
				$("#ip").hide();
			});
			$("#oth").click(function(){
				$("#ip").show();
			});
		})


