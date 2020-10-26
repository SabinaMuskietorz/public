function showNumber($num) {
    $numbers = ['Zero','One','Two','Three','Four','Five','Six','Seven','Eight','Nine','Ten'];
    
    return $numbers[$num];
}

echo showNumber(6);
echo showNumber(8);
echo showNumber(10);
?>