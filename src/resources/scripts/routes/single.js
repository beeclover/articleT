import share from '../components/share';
import recentPosts from '../components/recentPosts';

export default {
  init() {
    share();
    recentPosts();

    const youtubue = document.querySelectorAll("iframe[src*='youtube.com']");
    if (youtubue) {
      youtubue.forEach((y) => {
        y.parentElement.classList.add('youtubeifrmae');
      });
    }
  },
  finalize() {},
};
