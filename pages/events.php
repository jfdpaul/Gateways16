<html>
<head>
  <script src="../bower_components/webcomponentsjs/webcomponents-lite.min.js"></script>
  <link rel="import" href="../bower_components/polymer/polymer.html">
  <link rel="import" href="../bower_components/iron-ajax/iron-ajax.html">
  <link rel="import" href="../bower_components/paper-card/paper-card.html">
</head>

<body>

  <template is="dom-bind">
    <iron-ajax
          auto
          url="../data/event_details.json"
          params='{"name":"jhon"}'
          handle-as="json"
          last-response="{{jsondata}}">
    </iron-ajax>
      <!--<paper-card elevation="5">
        <div>{{jsondata}}</div>
      </paper-card>-->
      [[jsondata]]
  </template>

</body>
</html>
