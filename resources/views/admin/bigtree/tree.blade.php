<div id="myTree" width="400" height="400"></div>
<script>

    var data = [
    {id: 1, text: 'ROOT', left: 1, right: 10, level: 0, leaf: 0, expand: 1, path: '1'},
    {id: 2, text: 'A',    left: 2, right:  7, level: 1, leaf: 0, expand: 1, path: '1/2'},
    {id: 3, text: 'B',    left: 3, right:  4, level: 2, leaf: 1, expand: 1, path: '1/2/3'},
    {id: 4, text: 'C',    left: 5, right:  6, level: 2, leaf: 1, expand: 1, path: '1/2/4'},
    {id: 5, text: 'D',    left: 8, right:  9, level: 1, leaf: 1, expand: 1, path: '1/5'}
];

$('#myTree').bigtree('load', data, true);
</script>