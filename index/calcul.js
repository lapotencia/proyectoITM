function calcularP(){
    var p1=document.getElementById("P1").value;
    var p2=document.getElementById("P2").value;
    var p3=document.getElementById("P3").value;
    var p4=document.getElementById("P4").value;
    var intP1= parseInt(p1);
    var intP2= parseInt(p2);
    var intP3= parseInt(p3);
    var intP4= parseInt(p4);
    
    var CF= (intP1 + intP2 + intP3 + intP4) / 4
    document.getElementById("CF").value=CF.toFixed();

    var cfValue = document.getElementById('CF').value;

var situacionSelect = document.getElementById('Situacion');
var situacionLabel = document.getElementById('Situacin');


if (cfValue >= 70) {
    situacionSelect.innerHTML = '<option>Aprobado</option>';
} else {
    situacionSelect.style.display = 'none';
    situacionLabel.style.display = 'none';
}
  
    var cpc = parseFloat(document.getElementById("cpc").value);
    
    var cf50 = CF * 0.50;
    document.getElementById("50cf").value = cf50.toFixed();
    
    var cpc50 = cpc * 0.50;
    document.getElementById("50cpc").value = cpc50.toFixed();
    
    var cc = (cf50 + cpc50);
    document.getElementById("cc").value = cc.toFixed();

    var situacionCompletivoSelect = document.getElementById('SituacionCompletivo');
var situacionCompletivoLabel = document.getElementById('SituacinCompletivo');
if (cc >= 70) {
    situacionCompletivoSelect.innerHTML = '<option>Aprobado</option>';
} if (cc < 70) {
    situacionCompletivoSelect.style.display = 'none';
    situacionCompletivoLabel.style.display = 'none'; 
}

    var completivoo = document.getElementById("completivoo");
    
    if (CF < 70) {
        completivoo.style.display = "block";
    } else {
        completivoo.style.display = "none";
    }

    
    var extraordinario = document.getElementById("extraordinario");
    
    if (cc < 70) {
        extraordinario.style.display = "block";
    } else {
        extraordinario.style.display = "none";
    }
    
    var cf30 = CF * 0.30;
    document.getElementById("30cf").value = cf30.toFixed();
    
    var cpex = parseFloat(document.getElementById("cpex").value);
    
    var cpex70 = cpex * 0.70;
    document.getElementById("70cpex").value = cpex70.toFixed();
    
    var cex = (cf30 + cpex70);
    document.getElementById("cex").value = cex.toFixed();

    var situacionFinalSelect = document.getElementById("SituacionExtra");


if (cex >= 70) {
    situacionFinalSelect.innerHTML = '<option>Aprobado</option>';
} else if (cex < 70 && cex >= 0) {
    situacionFinalSelect.innerHTML = '<option>Reprobado</option>';
} 

    var ra1 = parseInt(document.getElementById("RA1").value);
    var ra2 = parseInt(document.getElementById("RA2").value);
    var ra3 = parseInt(document.getElementById("RA3").value);
    var ra4 = parseInt(document.getElementById("RA4").value);
    var ra5 = parseInt(document.getElementById("RA5").value);
  
    var pra1 = parseInt(document.getElementById("PRA1").value);
    var pra2 = parseInt(document.getElementById("PRA2").value);
    var pra3 = parseInt(document.getElementById("PRA3").value);
    var pra4 = parseInt(document.getElementById("PRA4").value);
    var pra5 = parseInt(document.getElementById("PRA5").value);

    var total = ra1 + ra2 + ra3 + ra4 + ra5;
    document.getElementById("TotalMF").value = total.toFixed(2);
  
    if (ra1 > pra1 || ra2 > pra2 || ra3 > pra3 || ra4 > pra4 || ra5 > pra5) {
      alert("Los RA deben ser mayores o iguales a los PRA.");
      document.getElementById("RA1").value = "";
      document.getElementById("RA2").value = "";
      document.getElementById("RA3").value = "";
      document.getElementById("RA4").value = "";
      document.getElementById("RA5").value = "";
    }
  
    
  }
  

    function MostrarAsigatura() {
        var asignatura = document.getElementById("asignaturas").value;
        document.getElementById("Periodos").style.display = "none";
        document.getElementById("RA").style.display = "none";

        if (asignatura ==="1") {
          document.getElementById("Periodos").style.display = "block";
          document.getElementById("RA").style.display = "none";
        }
        if (asignatura ==="2") {
          document.getElementById("Periodos").style.display = "block";
          document.getElementById("RA").style.display = "none";
        }
        if (asignatura ==="3") {
          document.getElementById("Periodos").style.display = "block";
          document.getElementById("RA").style.display = "none";
        }
       
}

function MostrarModulo() {
    var RA = document.getElementById("modulof").value;
    document.getElementById("Periodos").style.display = "none";
    document.getElementById("RA").style.display = "none";

    if (RA ==="1") {
        document.getElementById("Periodos").style.display = "none";
        document.getElementById("RA").style.display = "block";
      }
      if (RA ==="2") {
        document.getElementById("Periodos").style.display = "none";
        document.getElementById("RA").style.display = "block";
      }
      if (RA ==="3") {
        document.getElementById("Periodos").style.display = "none";
        document.getElementById("RA").style.display = "block";
      }
 
}
function sereseteolapagina() {
  location.reload(true);
}