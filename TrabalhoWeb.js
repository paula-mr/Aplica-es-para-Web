//criar variáveis que receberão os valores
var text;
var senha;
var op;
var checked;
var select;
var textarea;
var quant;
var antes;
var depois;
var cor;
var range;
var semana;
var hora;
var data;
var lista;
function confirma() {
	alert("funciona");
	text = document.form1.text.value;
	senha = document.form1.senha.value;
	op = document.form1.op.value;
	//retornar valores da checkbox
}
function gravar() {
	confirma();
	select = document.form2.select.value;
	textarea = document.form2.textarea.value;
	quant = document.form2.quant.value;
	antes = document.form2.antes.value;
	depois = document.form2.depois.value;
	cor = document.form2.cor.value;
	range = document.form2.range.value;
	semana = document.form2.semana.value;
	hora = document.form2.hora.value;
	data = document.form2.horaCompleta.value;
	lista = document.form2.lista.value;
	exibir();
}
function exibir() {
	alert("funciona");
	alert("Caixa de Texto: " + texto +
		"\nPassword: " + senha +
		"\nBotão de Rádio: " + op +
		"\nCheckbox: " + "FALTANDO" +
		"\nSelect: " + select +
		"\nTextarea: " + textarea +
		"\nQuantidade: " + quant +
		"\nData com mínimo: " + antes +
		"\nData com máximo: " + depois +
		"\nCor Favorita: " + cor
		);
}
function limpa() {}
