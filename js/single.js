/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var d = new Date();
var this_year = d.getFullYear();
var column_prefix_array = ['payment_term','lead_time','ppm','ottr','ppv','part_variety','part_quantity','spend','shipment_frequency','score'];

for(i=0; i<column_prefix_array.length;i++){
    var column_prefix = column_prefix_array[i];
    var value_string = get_value_array(column_prefix);
    var data = get_data('Payment Term', value_string);
    var term = document.getElementById(column_prefix).getContext('2d');
    var term_line_chart = new Chart(term).Line(data);
}

/*
 * functions
 */

function get_data(label_name, value_array){
    
    var temp_data = {
        labels: ['YTD', this_year-1, this_year-2, this_year-3, this_year-4],
        datasets: [
            {
                label: label_name,
                fillColor: "rgba(172,194,132,0.4)",
                strokeColor: "#ACC26D",
                pointColor: "rgba(220,220,220,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(220,220,220,1)",
                data: value_array
            },

        ]
    };
    console.info(temp_data);
    return temp_data;
}
function get_value_array(column_prefix){
    var temp_array = [supplier_array[0][column_prefix+'_ytd'], supplier_array[0][column_prefix+'_1_year_ago'], supplier_array[0][column_prefix+'_2_years_ago'], supplier_array[0][column_prefix+'_3_years_ago'], supplier_array[0][column_prefix+'_4_years_ago']];
    return temp_array;
}
