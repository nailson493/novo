<script>
    function addRow(){
	var estilo=document.getElementById('estilo').value;
	var tempo=document.getElementById('tempo').value;
	var valor=document.getElementById('valor').value;	
	
	if(estilo =="" || tempo ==""){
		alert("Por favor preencha todos os campos");
	}else{
		var parent=document.createElement('tr');
		var col1=document.createElement('td');
		var col2=document.createElement('td');
		var col3=document.createElement('td');
		var text1=document.createTextNode(estilo);
		var text2=document.createTextNode(tempo);
		var text3=document.createTextNode(valor);
        parent.className="bg-white border-b dark:bg-gray-100 dark:border-gray-700 rounded ";
        col1.className="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-black rounded ";
        col2.className="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-black rounded ";
		col3.className="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-black rounded ";

		col1.appendChild(text1);
		col2.appendChild(text2);
		col3.appendChild(text3);
		parent.appendChild(col1);
		parent.appendChild(col2);
		parent.appendChild(col3);
 
		document.getElementById('result').appendChild(parent); 
		document.getElementById('estilo').value="";
		document.getElementById('tempo').value="";
		document.getElementById('valor').value="";
		
		}
	}
</script>

<script>
	function myFunction() {
		document.getElementById('result').remove()
	}
	//quando você clicar no botão, o mesmo será deletado
</script>


<script>
  function openAndClosed(idselect, idOpen,idClosed){
        Aselect = document.getElementById(idselect); 
        Aopen = document.getElementById(idOpen);
        Aclosed = document.getElementById(idClosed);      
        if (Aselect.value == 'closed') {
            Aopen.setAttribute("disabled","disabled")
            Aclosed.setAttribute("disabled","disabled")
			Aopen.value='00;00';
			Aclosed.value='00;00';
        }else {
            Aopen.removeAttribute("disabled")
            Aclosed.removeAttribute("disabled")
        }
 
    };
</script>

<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.15.0/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.15.0/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyAdYba-Ftj2EpHen-gFTAzKQdTKl--C-jk",
    authDomain: "beardhub-b6fac.firebaseapp.com",
    projectId: "beardhub-b6fac",
    storageBucket: "beardhub-b6fac.appspot.com",
    messagingSenderId: "733189049588",
    appId: "1:733189049588:web:8b584e571fdd6bd08ae2a1",
    measurementId: "G-4ZVF5D2FMS"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
</script>










