import React from 'react'
import moment from 'moment'

const ArticlesSummary = ({article}) => {
  return(
    <div className="card z-depth-0 articles-summary">
      <div className="card-content purple-text text-darken-3">
        <span className="card-title">{article.title}</span>      
        <p>Posted by { article.authorFirstName } { article.authorLastName }</p>
        <p className="grey-text">{moment(article.createdAt.toDate().toString()).calendar()}</p>
      </div>
    </div>
  )
}

export default ArticlesSummary

/* Dont forget to: npm install moment >this is for date and time formats
 <div class="row">
    <div class="col s12 m7">
      <div class="card">
        <div class="card-image">
          <img src="images/sample-1.jpg">
          <span class="card-title">Card Title</span>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
        </div>
      </div>
    </div>
  </div>

  <div class="col s12 m7">
    <h2 class="header">Horizontal Card</h2>
    <div class="card horizontal">
      <div class="card-image">
        <img src="https://lorempixel.com/100/190/nature/6">
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.</p>
        </div>
      </div>
    </div>
  </div>

*/