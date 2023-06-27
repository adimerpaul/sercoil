<div class="pt-2" id="divPrint">
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .containerOptimizado {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: flex-start;
            align-items: flex-start;
            align-content: flex-start;
            outline: 1px solid grey;
            width: 244mm;
            height: 215mm;
        }
        .containerOptimizadoSpan1{
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: flex-start;
            align-items: flex-start;
            align-content: flex-start;
            /*outline: 1px solid green;*/
        }
        .containerOptimizadoSpan2{
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: flex-start;
            align-items: flex-start;
            align-content: flex-start;
            /*outline: 1px solid green;*/
        }
        .containerOptimizadoSpan3{
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: flex-start;
            align-items: flex-start;
            align-content: flex-start;
            /*outline: 1px solid green;*/
        }
        .childCss {
            /*background-color: lightblue;*/
            outline: 1px solid grey;
        }
        @media print{
            div.saltopagina{
                display:block;
                page-break-before:always;
            }
        }
    </style>
    <h5>2440mm x 2150mm  </h5>
    <div class="containerOptimizado" id="containerOpt1">
                        <span class="containerOptimizadoSpan1" id="span1">
                        </span>
    </div>
    <div class="saltopagina"></div>

    <div class="containerOptimizado" id="containerOpt2">
                        <span class="containerOptimizadoSpan1" id="span2">
                        </span>
    </div>
    <div class="saltopagina"></div>

    <div class="containerOptimizado" id="containerOpt3">
                        <span class="containerOptimizadoSpan1" id="span3">
                        </span>
    </div>
</div>
