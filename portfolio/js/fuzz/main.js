const app = {
    scramble: function(message, lineLength=100, minSymbols=10, maxSymbols=70) {

      const symbolCollection = "1234567890qwertyuiopasdfghjklzxcvbnm!@#$%^&*():?{}";
      let count = 0;

      // clear message before scramble it
      this.clearPage();

      // wrap symbol to span and hide it if it's symbol from initial message
      const addSymbolToBody = (symbol, hidden) => {
          if (hidden) {
            $("<span hidden>" + symbol + "</span>").appendTo("#app");
          }
          else {
            // count symbols and add break to the next line based on lineLength
            $("<span>" + symbol + "</span>").appendTo("#app");
            count++;
            if(count % lineLength === 0) {
              $("</br>").appendTo("#app");
            }
          }
      };
      // add rundom data for scrambling :)
      const addRandomData = () => {
          let randomSymbol;
          // random length for random data
          const randomDataLength = Math.floor(Math.random() * (maxSymbols - minSymbols)) + minSymbols;
          for(var i = 1; i <= randomDataLength; i++) {
              // get random character from collection of symbols(symbolCollection)
              randomSymbol = symbolCollection.charAt(Math.floor(Math.random() * symbolCollection.length));
              addSymbolToBody(randomSymbol);
          }
      };
      // loop thru each message character, add random data between each one
      message.split("").forEach((character) => {
          addRandomData();
          addSymbolToBody(character, true);
      });
      addRandomData();
    },
    unscramble: function() {
      const hiddenSpans = $("span:hidden");
      let message = "";
      for(var i = 0; i < hiddenSpans.length; i++){
        message += hiddenSpans[i].innerHTML;
      }
      this.clearPage();
      $("#app").text(message);
    },
    clearPage: function() {
        $("#app").html('');
    }
};
