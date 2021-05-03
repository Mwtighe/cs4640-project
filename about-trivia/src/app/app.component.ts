import { NgIf } from '@angular/common';
import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'Trivia App';
  authors = 'Mariah & Ethan';

  trivia_questions = ['How many years was Alex Trabek the host for Jeopardy!?', 'When did the first episode of Jeopardy! air?', 'Who was the original host of Jeopardy!?',
'What channel is Jeopardy! on?'];

  trivia_answers =['36 years', 'September 10, 1984', 'Art Fleming', 'NBC']; 

  correct_answer = '';

  wrong_answer = ''; 

  checkAnswer(data:any): void{
    ;
  }

}
