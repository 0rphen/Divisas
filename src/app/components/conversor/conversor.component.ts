import { Component, OnInit } from '@angular/core';

@Component({
    selector: 'app-conversor',
    templateUrl: './conversor.component.html',
    styleUrls: ['./conversor.component.css']
})
export class ConversorComponent implements OnInit {
    money2: number;
    constructor() { }

    ngOnInit() {
    }

    changeMoney(money: number): number {
        return money * this.money2;
    }

    setMoney(money: number) {
        this.money2 = money;
    }
}
