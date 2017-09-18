<!-- SPHERES METRICS-->

<?php $metrics = get_field('section_metrics'); ?>
<?php if($metrics){ ?>
<section class="box-text-top align-center container-normal bkg-none">
	<div class="container">
		<h2><?php echo $metrics['metrics_title']; ?></h2>
		<p><?php echo $metrics['metrics_copy'] ?></p>
		<div id="cy"></div>
	</div>
</section>
<?php } ?>

<script type="text/javascript">
var bubblesArray = <?php echo json_encode( $metrics['metrics_bubles'] ) ?>;
console.log(bubblesArray);
var elements = bubblesArray.length;
var colors = ['#725AB0', '#D5CEFA', '#F6639A', '#5F108F'];
var size = [1, 0.9, 0.8, 0.7, 0.6];

var cy = cytoscape({
	container: document.getElementById('cy'),
	style: [
		{
		    selector: 'node',
		    style: {
		        shape: 'ellipse',
		        label: 'data(id)'
		    }
		}]
});
for (var i = 0; i < elements; i++) {
	var size2 = 120 * size[Math.floor(Math.random()*size.length)];
	var aux = bubblesArray[i].bubble_title;
	cy.add({
		data: { id: aux },
		style: { 
			'background-color': colors[Math.floor(Math.random()*colors.length)],
			'height' : size2 + 'px',
			'width' : size2 + 'px',
			'font-size' : size2/5 + 'px',
			'color' : '#fff',
			'text-valign' : 'center',
		}
	});
}
for (var i = 0; i < elements; i++) {
	var source = bubblesArray[i].bubble_title;
	console.log(bubblesArray[i].bubble_title);
	
	var target; 
	for(var j = 0; j < elements ; j++){
		if((j!= i)&&(Math.random() > 0.8)){
			target = bubblesArray[j].bubble_title;
			cy.add({
			data: {
			    id: 'edge' + i + '_' +j,
			    source: source,
			    target: target,
			    style:{
			    	'width' : 1,
			    }
			}
			});
		}

	}


}
var layout = cy.layout({
	name: 'circle'
});
cy.nodes().ungrabify(); // disable node dragging
cy.userZoomingEnabled( false );
layout.run();
</script>