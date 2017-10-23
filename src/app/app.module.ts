import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppComponent } from './app.component';
import { ConversorComponent } from './components/conversor/conversor.component';

import { APP_ROUTING } from './app.routes';

@NgModule({
    declarations: [
        AppComponent,
        ConversorComponent
    ],
    imports: [
        BrowserModule,
        APP_ROUTING
    ],
    providers: [],
    bootstrap: [AppComponent]
})
export class AppModule { }
