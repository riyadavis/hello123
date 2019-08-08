
    <form action="<?php echo site_url('ExamApi/addItems')?>">
        <button type="submit" name="submit">Add items</button>
    </form>
    <script type="text/javascript">
    $(document).ready(function(){

        ajax();
        async function ajax()
        {
            var url = "<?php echo site_url('ExamApi/homeApi') ?>";
            request = await fetch(url);
            response = await request.json();
            response.map(r => {
                var para = document.createElement('p');
                textnode = r.itemName;
                var textnode = document.createTextNode(textnode);
                para.appendChild(textnode);
                $('#result').append(para);

            });
           

        }
       
    });
</script>  
<div id="result"></div>

