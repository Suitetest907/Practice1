/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
({
  // charts colors
  _renderHtml: function () {
    this._super('_renderHtml');

    var gauge_data_1 = {
      "properties": {
        "title": "Closed Won Opportunities Gauge",
        "values": [
          {
            "group": 1,
            "t": 4
          }
        ]
      },
      "data": [
        {
          "key": "Range 1"
          , "y": 3
        },
        {
          "key": "Range 2"
          , "y": 5
        },
        {
          "key": "Range 3"
          , "y": 7
        },
        {
          "key": "Range 4"
          , "y": 9
        }
      ]
    };

    var gauge_data_2 = {
      "properties": {
        "title": "Closed Won Opportunities Gauge",
        "values": [
          {
            "group": 1,
            "t": 4
          }
        ]
      },
      "data": [
        {
          "key": "Range 1"
          , "y": 3
          , "color": "#d62728"
        },
        {
          "key": "Range 2"
          , "y": 5
          , "color": "#ff7f0e"
        },
        {
          "key": "Range 3"
          , "y": 7
          , "color": "#bcbd22"
        },
        {
          "key": "Range 4"
          , "y": 9
          , "color": "#2ca02c"
        }
      ]
    };

    var gauge_data_3 = {
      "properties": {
        "title": "Closed Won Opportunities Gauge",
        "values": [
          {
            "group": 1,
            "t": 4
          }
        ]
      },
      "data": [
        {
          "key": "Range 1"
          , "y": 3
          , "class": "nv-fill07"
        },
        {
          "key": "Range 2"
          , "y": 5
          , "class": "nv-fill03"
        },
        {
          "key": "Range 3"
          , "y": 7
          , "class": "nv-fill17"
        },
        {
          "key": "Range 4"
          , "y": 9
          , "class": "nv-fill05"
        }
      ]
    };

    // Gauge Chart
    nv.addGraph(function() {
      var gauge = nv.models.gaugeChart()
          .x(function(d) { return d.key })
          .y(function(d) { return d.y })
          .showLabels(true)
          .showTitle(true)
          .colorData('default')
          .ringWidth(50)
          .maxValue(9)
          .direction(app.lang.direction)
          .transitionMs(4000);

      d3.select('#gauge1 svg')
          .datum(gauge_data_1)
          .call(gauge);

      return gauge;
    });

    nv.addGraph(function() {
      var gauge = nv.models.gaugeChart()
          .x(function(d) { return d.key })
          .y(function(d) { return d.y })
          .showLabels(true)
          .showTitle(true)
          .colorData('default', {gradient: true})
          .ringWidth(50)
          .maxValue(9)
          .direction(app.lang.direction)
          .transitionMs(4000);

      d3.select('#gauge2 svg')
          .datum(gauge_data_1)
        .transition().duration(500)
          .call(gauge);

      return gauge;
    });

    nv.addGraph(function() {
      var gauge = nv.models.gaugeChart()
          .x(function(d) { return d.key })
          .y(function(d) { return d.y })
          .showLabels(true)
          .showTitle(true)
          .colorData('default')
          .ringWidth(50)
          .maxValue(9)
          .direction(app.lang.direction)
          .transitionMs(4000);

      d3.select('#gauge3 svg')
          .datum(gauge_data_2)
        .transition().duration(500)
          .call(gauge);

      return gauge;
    });

    nv.addGraph(function() {
      var gauge = nv.models.gaugeChart()
          .x(function(d) { return d.key })
          .y(function(d) { return d.y })
          .showLabels(true)
          .showTitle(true)
          .colorData('default', {gradient: true})
          .ringWidth(50)
          .maxValue(9)
          .direction(app.lang.direction)
          .transitionMs(4000);

      d3.select('#gauge4 svg')
          .datum(gauge_data_2)
        .transition().duration(500)
          .call(gauge);

      return gauge;
    });

    nv.addGraph(function() {
      var gauge = nv.models.gaugeChart()
          .x(function(d) { return d.key })
          .y(function(d) { return d.y })
          .showLabels(true)
          .showTitle(true)
          .colorData('graduated', {c1: '#e8e2ca', c2: '#3e6c0a', l: gauge_data_1.data.length})
          .ringWidth(50)
          .maxValue(9)
          .direction(app.lang.direction)
          .transitionMs(4000);

      d3.select('#gauge5 svg')
          .datum(gauge_data_1)
        .transition().duration(500)
          .call(gauge);

      return gauge;
    });

    nv.addGraph(function() {
      var gauge = nv.models.gaugeChart()
          .x(function(d) { return d.key })
          .y(function(d) { return d.y })
          .showLabels(true)
          .showTitle(true)
          .colorData('graduated', {c1: '#e8e2ca', c2: '#3e6c0a', l: gauge_data_1.data.length, gradient: true})
          .ringWidth(50)
          .maxValue(9)
          .direction(app.lang.direction)
          .transitionMs(4000);

      d3.select('#gauge6 svg')
          .datum(gauge_data_1)
        .transition().duration(500)
          .call(gauge);

      return gauge;
    });


    nv.addGraph(function() {
      var gauge = nv.models.gaugeChart()
          .x(function(d) { return d.key })
          .y(function(d) { return d.y })
          .showLabels(true)
          .showTitle(true)
          .colorData('class')
          .ringWidth(50)
          .maxValue(9)
          .direction(app.lang.default)
          .transitionMs(4000);

      d3.select('#gauge7 svg')
          .datum(gauge_data_1)
        .transition().duration(500)
          .call(gauge);

      return gauge;
    });

    nv.addGraph(function() {
      var gauge = nv.models.gaugeChart()
          .x(function(d) { return d.key })
          .y(function(d) { return d.y })
          .showLabels(true)
          .showTitle(true)
          .colorData('class', {gradient: true})
          .ringWidth(50)
          .maxValue(9)
          .direction(app.lang.direction)
          .transitionMs(4000);

      d3.select('#gauge8 svg')
          .datum(gauge_data_3)
        .transition().duration(500)
          .call(gauge);

      return gauge;
    });
  }
})
