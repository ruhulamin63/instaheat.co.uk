$(document).ready(function () {

    'use strict';
    var brandPrimary;
    var brandPrimaryRgba;


    var adminChart    = $('#adminChart');

    if (adminChart.length > 0) {
        var net_profit = adminChart.data('profit_chart_value');
        var user_count = adminChart.data('customer_chart_value');
        var label1 = adminChart.data('label1');
        var label2 = adminChart.data('label2');
        var adminChart = new Chart(adminChart, {
            type: 'bar',
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                datasets: [
                    {
                        label: label1,
                        backgroundColor: ['rgb(54, 195, 110)'],
                        borderColor: ['rgba(255, 255, 255, 0.5)'
                        ],
                        borderWidth: 1,
                        data: [ user_count[0], user_count[1],
                                user_count[2], user_count[3],
                                user_count[4], user_count[5],
                                user_count[6], user_count[7],
                                user_count[8], user_count[9],
                                user_count[10], user_count[11],
                            0],
                    },
                    {
                        label: label2,
                        backgroundColor: [
                            'rgba(255, 137, 82, 1)',
                            'rgba(255, 137, 82, 1)',
                            'rgba(255, 137, 82, 1)',
                            'rgba(255, 137, 82, 1)',
                            'rgba(255, 137, 82, 1)',
                            'rgba(255, 137, 82, 1)',
                            'rgba(255, 137, 82, 1)',
                            'rgba(255, 137, 82, 1)',
                            'rgba(255, 137, 82, 1)',
                            'rgba(255, 137, 82, 1)',
                            'rgba(255, 137, 82, 1)',
                            'rgba(255, 137, 82, 1)',
                            'rgba(255, 137, 82, 1)'
                        ],
                        borderColor: [
                            'rgba(255, 137, 82, 1)',
                            'rgba(255, 137, 82, 1)',
                            'rgba(255, 137, 82, 1)',
                            'rgba(255, 137, 82, 1)',
                            'rgba(255, 137, 82, 1)',
                            'rgba(255, 137, 82, 1)',
                            'rgba(255, 137, 82, 1)',
                            'rgba(255, 137, 82, 1)',
                            'rgba(255, 137, 82, 1)',
                            'rgba(255, 137, 82, 1)',
                            'rgba(255, 137, 82, 1)',
                            'rgba(255, 137, 82, 1)',
                            'rgba(255, 137, 82, 1)'
                        ],
                        borderWidth: 1,
                        data: [ net_profit[0], net_profit[1],
                                net_profit[2], net_profit[3],
                                net_profit[4], net_profit[5],
                                net_profit[6], net_profit[7],
                                net_profit[8], net_profit[9],
                                net_profit[10], net_profit[11],
                            0],
                    },
                ]
            }
        });
    };
});
