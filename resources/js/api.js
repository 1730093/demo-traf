// const apiAsistencia = new Vue({
// 		el: '#apiAsistencia',
// 		methods:{
// 			eliminarImagen(imagen){
// 				Swal.fire({
// 				  title: '¿Estás seguro(a) de eliminar la imagen '+imagen.id+'?',
// 				  text: "¡Esta acción no puede ser revertida!",
// 				  icon: 'warning',
// 				  showCancelButton: true,
// 				  confirmButtonColor: '#3085d6',
// 				  cancelButtonColor: '#d33',
// 				  confirmButtonText: '¡Si, eliminar!',
// 				  cancelButtonText: 'Cancelar'
// 				}).then((result) => {
// 				  if (result.isConfirmed) {
// 				  	let url = '/api/eliminarimagen/'+imagen.id;
// 				  	axios.delete(url).then(response=>{
// 				  		console.log(response.data);
// 				  	});
// 				  	var elemento = document.getElementById('idimagen-'+imagen.id);
// 				  	elemento.parentNode.removeChild(elemento);
// 				    Swal.fire(
// 				      '¡Eliminado correctamente!',
// 				      'Su archivo ha sido eliminado.',
// 				      'success'
// 				    )
// 				  }
// 				})
// 			},
// 	});