const initState = {
  articles: [
    {id:1, title:'Now you know', content:'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam nihil quo quisquam repudiandae sed maiores eveniet. Alias excepturi doloribus distinctio fugit deleniti, laborum aperiam, enim fuga facilis odit impedit eum'},
    {id:2, title:'bla bla bla', content:'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam nihil quo quisquam repudiandae sed maiores eveniet. Alias excepturi doloribus distinctio fugit deleniti, laborum aperiam, enim fuga facilis odit impedit eum'},
    {id:3, title:'Can it be?', content:'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam nihil quo quisquam repudiandae sed maiores eveniet. Alias excepturi doloribus distinctio fugit deleniti, laborum aperiam, enim fuga facilis odit impedit eum'},
  ]
}

const articleReducer = (state = initState, action) => {
  switch (action.type) {
    case 'CREATE_ARTICLE':
      console.log('created article', action.article);
      return state;
    case 'CREATE_ARTICLE_ERROR':
      console.log('create project error', action.err);
      return state;
    default:
      return state;
    }
}

export default articleReducer