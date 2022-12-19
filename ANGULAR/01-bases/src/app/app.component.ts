/*import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  //templateUrl: 'app.component.html'
  template:'<span>Andres</span>'
})
export class AppComponent {
  title = 'bases';
}
*/
import { Component } from '@angular/core';

@Component({
  selector: 'app-root',//aqui es donde llamo al index
  template: `
    <h2>Hello word</h2>
    <p>This is my first component!</p>
  `
})
export class AppComponent {
  // The code in this class drives the component's behavior.

  title = 'bases';

}