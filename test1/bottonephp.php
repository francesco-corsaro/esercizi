<html>
<head>	
<title>bottone</title>
<style type="text/css">

.button {
    display: inline-block;
    border-radius: 50px;
    background-color: #f4511e;
    border: none;
    color: #FFFFFF;
    text-align: center;
    font-size: 28px;
    padding: 20px;
    width: 200px;
    transition: all 0.5s;
    cursor: pointer;
    margin: 5px;
}

.button span {
    cursor: pointer;
    display: inline-block;
    position: relative;
    transition: 0.5s;
}

.button span:after {
    content: '\00bb';
    position: absolute;
    opacity: 0;
    top: 0;
    right: -20px;
    transition: 0.5s;
}

.button:hover span {
    padding-right: 25px;
}

.button:hover span:after {
    opacity: 1;
    right: 0;
}
</style>
</head>
<body>

<h1>prova del bottone</h1>
<div>
	<button class="button" style="vertical-align:middle"><span>Informati </span></button>

</div>









</body>
</html>