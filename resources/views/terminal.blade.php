<div class="terminal">
    <div class="header">
        公眾聊天室
    </div>
    <div class="talk">
        <script>
            $(function(){
                var Size = $('p').height();
                console.log(Size);
                $('.type').attr('height', Size);
                $('.header').attr('height', Size);
                console.log($('html').height());
            })
        </script>
    </div>
    <div class="type">
        <p>Rice$ <span>|</span></p>
    </div>
</div>