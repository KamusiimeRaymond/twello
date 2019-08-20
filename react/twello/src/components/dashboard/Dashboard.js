import React, { Component } from 'react'
import Notifications from './Notifications'
import ArticlesList from '../articles/ArticleList'
import { connect } from 'react-redux'
import { firestoreConnect } from 'react-redux-firebase'
import { compose } from 'redux' 
import { Redirect } from 'react-router-dom'

class Dashboard extends Component {
  render(){
    const { articles, auth } = this.props;
    if (!auth.uid) return <Redirect to='/signin' />
    return(
      <div className="dashboard container">
        <div className="row">
          <div className="col s12 m6">
            <ArticlesList articles={articles}/>  
          </div>
          <div className="col s12 m5 offset-m1"></div>  
          <Notifications />
        </div>
      </div>
    )
  }
}

const mapStateToProps = (state) => {
  console.log(state)
  return{
    articles: state.firestore.ordered.articles,
    auth: state.firebase.auth
  }
}

export default compose(
  connect(mapStateToProps),
  firestoreConnect([
    { collection: 'articles'}
  ])
)(Dashboard)