
<!DOCTYPE html>
<html>
    <head>
        <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
      </script>

        <!--These jQuery libraries for
           chosen need to be included-->
        <script src=
"https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js">
        </script>
        <link rel="stylesheet"
              href=
"https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.min.css" />

        <!--These jQuery libraries for select2
            need to be included-->
        <script src=
"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js">
       </script>
        <link rel="stylesheet"
              href=
"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css" />
        <script>
            $(document).ready(function () {
                //Select2
                $(".country").select2({
                    maximumSelectionLength: 2,
                });
                $(".c").select2({
                });
                //Chosen
                // $(".c").chosen({
                //     max_selected_options: 2,
                // });
            });
        </script>
    </head>
    <body>
        <form>
            <h4>Selections using Select2</h4>
            <select class="country3"

                    style="width: 200px;">
                <option value="">Select</option>
                <option value="1">India</option>
                <option value="2">Japan</option>
                <option value="3">France</option>
            </select>
            <h4>Selections using Chosen</h4>
            <select class="c"
                    multiple="true"
                    style="width: 200px;">
                <option value="" class="f">Select Country</option>
                <option value="1">India</option>
                <option value="2">Japan</option>
                <option value="3">France</option>
            </select>
            <button type="button" name="button" class="btn btn-primary" id="change">Changes</button>
        </form>
    </body>
    <script>
    $(document).ready(function(){
      $("#change").on("click",function(){
    $(".country3").find("option[value='']").attr("selected",true);

    $(".c").select2("val",'');
      // $(".c").destroy()


    // let op=[""]
    //  $('country1').val(" ").trigger('change');
    // $(".country1").find("option").text.trigger("change");
    //$(".country1").find("option[value='']").attr("selected",true)
        //$(".country").val("").trigger("change");
      });
    })
    </script>
</html>
