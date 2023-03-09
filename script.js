$(document).ready(() => {

    $(".option").click((event) => {
      $(event.target).parent().find(".confirm").removeClass("hidden");
    });

    $(".confirm").click((event) => {                                      //note for later add conditional to see if has class incorrect then send to results.php, else continue
        $(event.target).parent().next().removeClass("hidden");
        $(event.target).parent().addClass("hidden");
        $(".confirm").addClass("hidden");

    });

    $(".fiftyfifty").click((event) => {       //fifty fifty lifeline
      $(event.target).parent().find("input.wrong").eq(1).addClass("hidden");
      $(event.target).parent().find("label.wrong").eq(1).addClass("hidden");
      $(event.target).parent().find("input.wrong").eq(2).addClass("hidden");
      $(event.target).parent().find("label.wrong").eq(2).addClass("hidden");

      //hide all other lifelines for this question, to limit one life-line per question
      $(event.target).parent().find(".swap_question").addClass("hidden");
      $(event.target).parent().find(".skip_question").addClass("hidden");

      $(".fiftyfifty").addClass("hidden");
      $(".confirm").addClass("hidden");
  });

  $(".swap_question").click((event) => {      //replace question lifeline
    $(event.target).parent().find("p.question").html("Which one of these spices is NOT traditionally found in Spanish Cuisine?");
    $(event.target).parent().find("label.wrong").eq(0).html("Paprika");
    $(event.target).parent().find("label.wrong").eq(1).html("Tarragon");
    $(event.target).parent().find("label.wrong").eq(2).html("Cinamon");
    $(event.target).parent().find("label.right").html("Cardamom");

    //hide all other lifelines for this question, to limit one life-line per question
    $(event.target).parent().find(".skip_question").addClass("hidden");
    $(event.target).parent().find(".fiftyfifty").addClass("hidden");

    $(".swap_question").addClass("hidden");
  });

  $(".skip_question").click((event) => {      //skip question lifeline
    $(event.target).parent().find("input").removeAttr("required");
    $(event.target).parent().next().removeClass("hidden");
    $(event.target).parent().addClass("hidden");

    //hide all other lifelines for this question, to limit one life-line per question
    $(event.target).parent().find(".swap_question").addClass("hidden");
    $(event.target).parent().find(".fiftyfifty").addClass("hidden");

    $(".confirm").addClass("hidden");
    $(".skip_question").addClass("hidden");
});

});
