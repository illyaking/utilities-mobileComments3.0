<?php
header('Content-Type: text/javascript');
require_once('constants.php');
?>

$(document).ready(function () {

document.getElementById("commodity").focus();

// Special Buttons
    
   var special = [" ", "," , ".", "\n", "Reference: ~~ADD WEBSITE ADDRESS~~." , "Freight is "];
   
    $("#comma").on("click", function () {
        $('#description').val(($('#description').val() + special[1]));
    });
    
    $("#period").on("click", function () {
        $('#description').val(($('#description').val() + special[2] + special[3]));
    });
    
    $("#return").on("click", function () {
        $('#description').val(($('#description').val() + special[3]));
    });
    
    $("#addURL").on("click", function () {
        $('#description').val(($('#description').val() + special[3] + special[4]));
    });

var conjuction = ["a", "and", "in", "on", "to"];

    $("#a").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + conjuction[0]));
    });

    $("#and").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + conjuction[1]));
    });
    
    $("#in").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + conjuction[2]));
    });

    $("#on").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + conjuction[3]));
    });
    
    $("#to").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + conjuction[4]));
    });

// States Buttons

var states = [ "KD,", "KD Flat,", "SU,", "nested", "not", "banded", "wrapped", "pallet", "pallets", "skid", "skids"];
    
    $("#kdText").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + states[0]));
    });
    
    $("#kdFlat").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + states[1]));
    });
    
    $("#suText").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + states[2]));
    });
    
    $("#nested").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + states[3]));
    });
    
    $("#not").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + states[4]));
    });
    
    $("#banded").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + states[5]));
    });
    
    $("#wrapped").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + states[6]));
    });
    
    $("#pallet").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + states[7]));
    });
    
    $("#pallets").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + states[8]));
    });
    
    $("#skid").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + states[9]));
    });
    
    $("#skids").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + states[10]));
    });

// Buttons 

var packaging = [ "bag", "bags", "bottle", "bottles", "box", "boxes", "bundle", "bundles", "carton", "cartons", "crate", "crates", "drum", "drums", "frame", "frames", "gaylord", "gaylords", "keg", "kegs",
                  "pail", "pails", "roll", "rolls", "tank", "tanks", "tote", "totes", "tube", "tubes", "bulk commodity tote", "bulk commodity totes", "loose", "machine pressed", "plastic", "metal", "wooden", "fiberboard", "cardboard" , "rack", "racks"];  


    $("#bag").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[0] + special[1]));
        });

    $("#bags").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[1] + special[1]));
        });

    $("#bottle").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[2] + special[1]));
        });

    $("#bottles").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[3] + special[1]));
        });

    $("#box").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[4] + special[1]));
        });

    $("#boxes").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[5] + special[1]));
        });

    $("#bundle").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[6] + special[1]));
        });
        
    $("#bundles").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[7] + special[1]));
        });

    $("#carton").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[8] + special[1]));
        });
        
    $("#cartons").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[09] + special[1]));
        });

    $("#crate").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[10] + special[1]));
        });
        
    $("#crates").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[11] + special[1]));
        });
    
    $("#drum").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[12] + special[1]));
        });

    $("#drums").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[13] + special[1]));
        });

    $("#frame").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[14] + special[1]));
        });

    $("#frames").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[15] + special[1]));
        });

    $("#gaylord").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[16] + special[1]));
        });

    $("#gaylords").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[17] + special[1]));
        });

    $("#keg").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[18] + special[1]));
        });

    $("#kegs").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[19] + special[1]));
        });

    $("#pail").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[20] + special[1]));
        });

    $("#pails").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[21] + special[1]));
        });
                     
    $("#roll").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[22] + special[1]));
        });

    $("#rolls").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[23] + special[1]));
        });
    
    $("#tank").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[24] + special[1]));
        });
                     
    $("#tanks").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[25] + special[1]));
        });
              
    $("#tote").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[26] + special[1]));
        });

    $("#totes").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[27] + special[1]));
        });

    $("#tube").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[28] + special[1]));
        });
              
    $("#tubes").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[29] + special[1]));
        });

    $("#bulkCommodityTote").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[30] + special[1]));
        });
              
    $("#bulkCommodityTotes").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[31] + special[1]));
        });

    $("#loose").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[32] + special[1]));
        });
    
    $("#machinePressed").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[33]));
        });
                 
    $("#plastic").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[34]));
        });
               
    $("#metal").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[35]));
        });
        
    $("#wooden").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[36]));
        });
    
    $("#fiberboard").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[37]));
        });

    $("#cardboard").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[38]));
        });
        
    $("#rack").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[39]));
        });

    $("#racks").on("click", function () {
        $('#description').val(($('#description').val() + special[0] + packaging[40]));
        });

// Shipper's Description

   var shipper = [
   "Billed as ~~ ADD COMMODITY~~ at class ~~ ADD CLASS ~~ with NMFC ~~ ADD NMFC ~~. Change due to ~~proper description/more specific description/ or other characteristics~~, correct NMFC, and lower/higher density.",
   "Tendered as ~~ ADD COMMODITY~~ at class ~~ ADD CLASS ~~ with NMFC ~~ ADD NMFC ~~. Change due to ~~proper description/more specific description/ or other characteristics~~, correct NMFC, and lower/higher density.",
   "Billed as ~~ ADD COMMODITY~~ at class ~~ ADD CLASS ~~ with no NMFC ~~ ADD NMFC ~~. Change due to ~~proper description/more specific description/ or other characteristics~~, correct NMFC, and lower/higher density.",
   "Tendered as ~~ ADD COMMODITY~~ at class ~~ ADD CLASS ~~ with no NMFC ~~ ADD NMFC ~~. Change due to ~~proper description/more specific description/ or other characteristics~~, correct NMFC, and lower/higher density.",
   "Correctly rated and described.",
   "Billed as ~~ ADD COMMODITY~~ at class ~~ ADD CLASS ~~ with an invalid NMFC. Change due to ~~proper description/more specific description/ or other characteristics~~, NMFC, and lower/higher density.",
   "One more of the largest handling unit ~~ will/will not ~~ fit in a pup trailer."
   ];

    $("#billedAs").on("click", function () {
        $('#description').val(($('#description').val() + shipper[0] + special[3]));
        });
        
    $("#tenderedAs").on("click", function () {
        $('#description').val(($('#description').val() + shipper[1] + special[3]));
        });

    $("#noBill").on("click", function () {
        $('#description').val(($('#description').val() + shipper[2] + special[3]));
        });
        
    $("#noTendered").on("click", function () {
        $('#description').val(($('#description').val() + shipper[3] + special[3]));
        });
        
    $("#correct").on("click", function () {
        $('#description').val(($('#description').val() + shipper[4] + special[3]));
        });
    
    $("#eighteighteight").on("click", function () {
        $('#description').val(($('#description').val() + shipper[5] + special[3]));
        });

// FXF and NMFC Special Rules

   var itemRules = [
    "No value was declared on BOL. Per FXF ITEM 420 Sec 5. Line A.1, The class containing the maximum liability not exceeding $5.00 per pound was applied.",
    "Per NMFC ITEM 422, Shipment reclassified to highest article in combination.",
    "Per NMFC ITEM 424 (Referring to Classification of Parts or Pieces of a Complete Article), The classification was applied for the complete article.",
    "Per NMFC ITEM 425 (Referring to recondition articles), this freight has been reconditioned and is considered new and not used.",
    "Shipment was not itemized and was billed as ~~ENTER IN BILLED DESCRIPTION~~ with NMFC ~~ENTER NMFC~~ class ~~ENTER CLASS~~ at ~~ENTER IN WEIGHT~~ lbs. Mixed rates apply as stated in FXF ITEM 640- UNLESS OTHERWISE PROVIDED, SHIPMENTS THAT CONSIST OF DIFFERENTLY CLASSED ARTICLES CONTAINED IN OR ON ONE HANDLING UNIT THAT HAVE BEEN INSPECTED AND THE INSPECTION DETERMINES THE SHIPPER’S INFORMATION WAS INACCURATE, THE HANDLING UNIT WILL BE RATED AT THE CLASS SHOWN IN PARAGRAPH 2 BASED ON THE DENSITY OF THE UNIT USING THE WEIGHT AND MEASUREMENTS.",
    "Per FXF ITEM 750-8, This freight is being delivered to a limited access location listed in ITEM 750-8. The Limited Access Location charge applies.",
    "Commodity occupies ~~ADD LENGTH~~ inches by ~~ADD WIDTH~~ inches by ~~ADD HEIGHT~~ inches, which is ~~ADD PERCENTAGE~~% of a lift truck skids, pallets or platforms with a surface area of ~~ADD LENGTH~~ inches and ~~ADD WIDTH~~ inches or ~~ADD SQUARE INCHES~~ square inches of space. Shipment also meets the stability requirement of NMFC item 680 note c. FXF ITEM 680 applies.",
    "Commodity is ~~ADD LENGTH~~ inches by ~~ADD WIDTH~~ inches by ~~ADD HEIGHT~~ inches, resulting in  occupying ~~ADD PERCENTAGE~~% of the container.",
    "PER NMFC ITEM 250100 sec. 3(a), this freight was opened to verify contents.",
    "No NMFC on OBOL - *NOBI*",
    "Incorrect NMFC in OBOL - *ICBI*",
    "Cannot Dimension shipment - *CDMI*"
    ];

    $("#item420").on("click", function () {
        $('#description').val(($('#description').val() + itemRules[0] + special[3]));
    });

    $("#item422").on("click", function () {
        $('#description').val(($('#description').val() + itemRules[1] + special[3]));
    });
    
    $("#item424").on("click", function () {
        $('#description').val(($('#description').val() + itemRules[2] + special[3]));
    });
    
    $("#item425").on("click", function () {
        $('#description').val(($('#description').val() + itemRules[3] + special[3]));
    });
    
    $("#item640").on("click", function () {
        $('#description').val(($('#description').val() + itemRules[4] + special[3]));
    });
    
    $("#item750Eight").on("click", function () {
        $('#description').val(($('#description').val() + itemRules[5] + special[3]));
    });
    
    $("#item680Pallet").on("click", function () {
        $('#description').val(($('#description').val() + itemRules[6] + special[3]));
    });

    $("#item680Container").on("click", function () {
        $('#description').val(($('#description').val() + itemRules[7] + special[3]));
    });
    
    $("#item250100").on("click", function () {
        $('#description').val(($('#description').val() + itemRules[8] + special[3]));
    });
    
    $("#nobi").on("click", function () {
        $('#description').val(($('#description').val() + itemRules[9] + special[3]));
    });
    
    $("#icbi").on("click", function () {
        $('#description').val(($('#description').val() + itemRules[10] + special[3]));
    });
    
    $("#cdmi").on("click", function () {
        $('#description').val(($('#description').val() + itemRules[11] + special[3]));
    });

// Accessorials

    var accessorials = [
    "Freight is equal or over 8 feet but less than 12 feet at ~~ENTER LENGTH~~, over length charge applies.",
    "Freight is equal or over 12 feet at ~~ENTER LENGTH~~, extreme length charge applies.",
    "Freight is equal to or over 750 CUFT at ~~ADD CUFT~~ CUFT and under 4 PCF at ~~ADD PCF~~ PCF, Cubic Capacity and Load charge applies.",
    "Shipment overall dimensions is at ~~Enter Overall Dims Here~~." + special[3] + "Shipment utilizes ~~Enter Lineal Feet Here~~ linear feet in length." + special[3] + shipper[6] ,
    "Shipment is equal to or exceeds 15,000 lbs., actual weight at ~~Enter Weight Here~~ lbs." + special[3] + shipper[6],
    "Shipment also qualifies for the Cubic Capacity and Density tariff rule." + special[3],
    "**Combination PROS - Per ITEM 390 line 4, Combine with PRO ~~Enter PRO number here~~ .",
    "FA/IIK"
    ];
    
    $("#overLength").on("click", function () {
        $('#description').val(($('#description').val() + accessorials[0] + special[3]));
    });
    
    $("#extremeLength").on("click", function () {
        $('#description').val(($('#description').val() + accessorials[1] + special[3]));
    });

    $("#ccd").on("click", function () {
        $('#description').val(($('#description').val() + accessorials[2] + special[3]));
    });

    $("#capload").on("click", function () {
        $('#description').val(($('#description').val() + accessorials[3] + special[3]));
    });

    $("#capload15k").on("click", function () {
        $('#description').val(($('#description').val() + accessorials[4] + special[3]));
    });
    
    $("#qualifiesCCD").on("click", function () {
        $('#description').val(($('#description').val() + accessorials[5] + special[3]));
    });

    $("#multiplePro").on("click", function () {
        $('#description').val(($('#description').val() + accessorials[6] + special[3]));
    });

    $("#signIIK").on("click", function () {
        $('#description').val(($('#description').val() + accessorials[7] + special[3]));
    });

// Finish Buttons

    $("#clear").on("click", function () {
        $("#commodity").val("");
        $("#description").val("");
        $("#description").focus();
    });

    $("#clearComments").on("click", function () {
        $("#description").val("");
        $("#description").focus();
    });
    
    $('#commodityButton').click(function () {
         $('#description').val(($('#description').val() + special[5] + $('#commodity').val() + "." + special[3]));
    });
    
    $('#delete').click(function () {
        var inputString = $('#description').val();
        var shortenedString = inputString.substr(0, (inputString.length - 1));
        $('#description').val(shortenedString);
    });
      
    $("#copyText").click(function () {
        $("textarea").select();
        document.execCommand('copy');
    });

          
});