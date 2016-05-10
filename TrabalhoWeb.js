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
//função confirma
function confirma() {
	confirm("Deseja confirmar?");
}
//função que transforma os valores da checkbox em uma única string
function checkboxString() {
	checked="";
	for (i=0; i<4; i++ ) {
		if (document.getElementById(i).checked==true) {
			checked += "\nchk" + (i+1) + " checked";
		}
	}
}
//função gravar
function gravar() {
	text = document.form.texto.value;
	senha = document.form.senha.value;
	op = document.form.op.value;
	select = document.form.select.value;
	checkboxString();
	textarea = document.form.textarea.value;
	quant = document.form.quantidade.value;
	antes = document.form.antes.value;
	depois = document.form.depois.value;
	cor = document.form.cor.value;
	range = document.form.range.value;
	semana = document.form.semana.value;
	hora = document.form.hora.value;
	data = document.form.horaCompleta.value;
	lista = document.form.lista.value;
	exibir();
}
//função exibir valores
function exibir() {
	alert("Caixa de Texto: " + text +
		"\nPassword: " + senha +
		"\nBotão de Rádio: " + op +
		"\nCheckbox: " + checked +
		"\nSelect: " + select +
		"\nTextarea: " + textarea +
		"\nQuantidade: " + quant +
		"\nData com mínimo: " + antes +
		"\nData com máximo: " + depois +
		"\nCor Favorita: " + cor +
		"\nRange: " + range +
		"\nSemana selecionada: " + semana +
		"\nHora: " + hora +
		"\nData Completa: " + data+
		"\nLista suspensa com edição: " + lista
		);
}