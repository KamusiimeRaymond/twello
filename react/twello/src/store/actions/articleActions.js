export const createArticle = (article) => {
  return(dispatch, getState, { getFirebase, getFirestore }) => {
    
    // make async call to db
    const firestore = getFirestore();
    const profile = getState().firebase.profile;
    const authorId = getState().firebase.auth.uid;

    firestore.collection('articles').add({
      ...article,
      authorFirstName: profile.firstName,
      authorLastName: profile.lastName,
      authorId: authorId,
      createdAt: new Date()
    }).then(() => {
      dispatch({ type: 'CREATE_ARTICLE', article });
    }).catch((err) => {
      dispatch({ type: 'CREATE_ARTICLE_ERROR', err });
    })
  }
};