<script>
    window.onload = function() {
        $('#cantidad1').val(10)
        $('#longitud1').val(250)
        $('#ancho1').val(250)
        $('#cantidad2').val(0)
        $('#longitud2').val(0)
        $('#ancho2').val(0)
        $('#cantidad3').val(0)
        $('#longitud3').val(0)
        $('#ancho3').val(0)
        $('#btnImprimir').click(function (){
            console.log('imprimir')
            var mode = 'iframe'; //popup
            var close = mode == "popup";
            var options = { mode : mode, popClose : close};
            $("#divPrint").printArea( options );
        })

        function ocultarDiv() {
            $('#containerOpt1').hide()
            $('#containerOpt2').hide()
            $('#containerOpt3').hide()
        }

        ocultarDiv();
        $('#btn').click(function(){
            if ($('#cantidad1').val() == '' || $('#longitud1').val() == '' || $('#ancho1').val() == '') {
                alert('Llene los campos de la primera fila')
                return false
            }
            if ( $('#longitud1').val() < 150 || $('#ancho1').val() < 150 || $('#longitud1').val() > 2440 || $('#ancho1').val() > 2150) {
                alert('La longitud y el ancho no pueden ser menores a 150mm ni mayores a 2440mm y 2150mm respectivamente')
                return false
            }
            $('#span1').html('')
            $('#span2').html('')
            $('#span3').html('')
            ocultarDiv()
            colocar1()
        })
        colocar1()
        function colocar1() {
            let arrayPrincipal = []
            if($('#cantidad1').val() != '' && $('#longitud1').val() != '' && $('#ancho1').val() != ''){
                for (let i = 0; i < $('#cantidad1').val(); i++) {
                    let lon1 = $('#longitud1').val()/10
                    let anc1 = $('#ancho1').val()/10
                    arrayPrincipal.push({lon:lon1,anc:anc1,color:'#E91E63'})
                }
            }
            if($('#cantidad2').val() != '' && $('#longitud2').val() != '' && $('#ancho2').val() != ''){
                for (let i = 0; i < $('#cantidad2').val(); i++) {
                    let lon2 = $('#longitud2').val()/10
                    let anc2 = $('#ancho2').val()/10
                    arrayPrincipal.push({lon:lon2,anc:anc2,color:'#2196F3'})
                }
            }
            if($('#cantidad3').val() != '' && $('#longitud3').val() != '' && $('#ancho3').val() != ''){
                for (let i = 0; i < $('#cantidad3').val(); i++) {
                    let lon3 = $('#longitud3').val()/10
                    let anc3 = $('#ancho3').val()/10
                    arrayPrincipal.push({lon:lon3,anc:anc3,color:'#4CAF50'})
                }
            }
            arrayPrincipal = ordenarArray(arrayPrincipal)
            for(let i = 0; i < arrayPrincipal.length; i++){
                let w = arrayPrincipal[i].lon+'mm'
                let h = arrayPrincipal[i].anc+'mm'
                spanAdd(w,h,arrayPrincipal[i].color)
            }
        }
        function ordenarArray(array){
            let arrayOrdenado = array.sort(function (a, b) {
                return (b.lon * b.anc) - (a.lon * a.anc);
            });
            return arrayOrdenado
        }
        function spanAdd(w,h,color) {
            let todo1 = $('#span1').html();
            spanAddId(w,h,color,'1')
            $('#containerOpt1').show()
            if ($('#span1').height() > 813) {
                $('#span1').html(todo1)
                let todo2 = $('#span2').html();
                spanAddId(w,h,color,'2')
                $('#containerOpt2').show()
                if ($('#span2').height() > 813) {
                    $('#span2').html(todo2)
                    let todo3 = $('#span3').html();
                    spanAddId(w,h,color,'3')
                    $('#containerOpt3').show()
                    if ($('#span3').height() > 813) {
                        $('#span3').html(todo3)
                        alert('No se puede optimizar')
                    }
                }
            }
        }
        function spanAddId(w,h,color,id) {
            let w10 = parseInt(w.replace('mm',''))*10
            let h10 = parseInt(h.replace('mm',''))*10
            $(`#span${id}`).append($('<div>')
                .addClass('childCss')
                .css('width',w)
                .css('height',h)
                .css('background-color',color)
                .css('font-size','10px')
                .css('font-weight','bold')
                .css('text-align','center')
                .css('display','flex')
                .css('justify-content','center')
                .css('align-items','center')
                .css('color','#fff')
                .html(`<span class="spanChildCss">${w10}mm x ${h10}mm</span>`)
            );
        }
    };
</script>
