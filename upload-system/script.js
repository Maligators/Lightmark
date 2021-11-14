function formatFileSize(bytes,decimalPoint) {
	if(bytes == 0) return '0 Bytes';
	var k = 1000,
		dm = decimalPoint || 2,
		sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'],
		i = Math.floor(Math.log(bytes) / Math.log(k));
	return parseFloat((bytes / Math.pow(k, i)).toFixed(dm)) + ' ' + sizes[i];
}
updateList = function() {
	var input = document.getElementById('post_files');
	var output = document.getElementById('post_files_list');
	var children = "";
	for (var i = 0; i < input.files.length; ++i) {
		children += '<li>' + input.files.item(i).name + ' - ' + formatFileSize(input.files.item(i).size) + '</li>';
	}
	output.innerHTML = '<ul>'+children+'</ul>';
}
