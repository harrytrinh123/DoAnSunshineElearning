var myCanvas = document.getElementById("myCanvas");
 
myCanvas.width = 300;
 
myCanvas.height = 300;
 
 
 
var ctx = myCanvas.getContext("2d");
function drawLine(ctx, startX, startY, endX, endY){
 
    ctx.beginPath();
 
    ctx.moveTo(startX,startY);
 
    ctx.lineTo(endX,endY);
 
    ctx.stroke();
 
}var Piechart = function(options){
 
    this.options = options;
 
    this.canvas = options.canvas;
 
    this.ctx = this.canvas.getContext("2d");
 
    this.colors = options.colors;
 
 
 
    this.draw = function(){
 
        var total_value = 0;
 
        var color_index = 0;
 
        for (var categ in this.options.data){
 
            var val = this.options.data[categ];
 
            total_value += val;
 
        }
 
 
 
        var start_angle = 0;
 
        for (categ in this.options.data){
 
            val = this.options.data[categ];
 
            var slice_angle = 2 * Math.PI * val / total_value;
 
 
 
            drawPieSlice(
 
                this.ctx,
 
                this.canvas.width/2,
 
                this.canvas.height/2,
 
                Math.min(this.canvas.width/2,this.canvas.height/2),
 
                start_angle,
 
                start_angle+slice_angle,
 
                this.colors[color_index%this.colors.length]
 
            );
 
 
 
            start_angle += slice_angle;
 
            color_index++;
 
        }
 
 
 
        //drawing a white circle over the chart
 
        //to create the doughnut chart
 
        if (this.options.doughnutHoleSize){
 
            drawPieSlice(
 
                this.ctx,
 
                this.canvas.width/2,
 
                this.canvas.height/2,
 
                this.options.doughnutHoleSize * Math.min(this.canvas.width/2,this.canvas.height/2),
 
                0,
 
                2 * Math.PI,
 
                "#ff0000"
 
            );
 
        }
 
 
 
    }
 
}
var myDougnutChart = new Piechart(
 
    {
 
        canvas:myCanvas,
 
        data:myVinyls,
 
        colors:["#fde23e","#f16e23", "#57d9ff","#937e88"],
 
        doughnutHoleSize:0.5
 
    }
 
);
 
myDougnutChart.draw();