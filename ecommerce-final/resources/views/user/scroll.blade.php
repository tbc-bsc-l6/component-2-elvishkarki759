<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<style>
      #btnScrollToTop{
        position:fixed;
        right: 10px;
        bottom: 10px;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: #e62739;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.25);
        color: white;
        border: none;
        outline: none;
        cursor: pointer;
      }

      #btnScrollToTop:active{
        background: #cc2333;

      }
    </style>

    <button id="btnScrollToTop">
         <i class="material-icons">arrow_upward</i>
         <!-- <p>Go To Top</p> -->

       </button>


       <script>
  const btnScrollToTop = document.querySelector("#btnScrollToTop");
  btnScrollToTop,addEventListener("click",function(){
    // window.scrollTo(0,0);
    // window.scrollTo({
    //   top: 0,
    //   left: 0,
    //   behaviour: "smooth"
    // })
    $("html,body").animate({
      scrollTop: 0
    },"slow")
  })
</script>