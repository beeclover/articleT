function kakao() {
  const linkBtn = document.querySelector('#share-kakao');
  if (!linkBtn) return;
  const content = {
    title: linkBtn.dataset.title,
    description: linkBtn.dataset.description,
    imageUrl: linkBtn.dataset.imageurl,
    link: {
      webUrl: linkBtn.dataset.link, // 카카오 PC에서 확인할 때 연결될 웹 url
      mobileWebUrl: linkBtn.dataset.link, // 카카오 앱에서 확인할 때 연결될 웹 url
    },
  };
  window.Kakao.init('b102ff29347c2bef13ed6a399a06c633');
  window.Kakao.Link.createDefaultButton({
    container: '#share-kakao', // 공유하기 기능을 부여할 DOM container
    objectType: 'feed', // 피드타입
    content,
  });
}

export default () => {
  kakao();
};
