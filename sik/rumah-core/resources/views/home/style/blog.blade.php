<style>
    .blog .entry {
        padding: 30px;
        margin-bottom: 60px;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
    }

    .blog .entry .entry-img {
        max-height: 400px;
        margin: -30px -30px 20px -30px;
        overflow: hidden;
    }

    .blog .entry .entry-title {
        font-size: 28px;
        font-weight: bold;
        padding: 0;
        margin: 0 0 20px 0;
    }

    .blog .entry .entry-title a {
        color: #111111;
        transition: 0.3s;
    }

    .blog .entry .entry-title a:hover {
        color: #e03a3c;
    }

    .blog .entry .entry-meta {
        margin-bottom: 15px;
        color: #777777;
    }

    .blog .entry .entry-meta ul {
        display: flex;
        flex-wrap: wrap;
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .blog .entry .entry-meta ul li+li {
        padding-left: 20px;
    }

    .blog .entry .entry-meta i {
        font-size: 14px;
        padding-right: 4px;
    }

    .blog .entry .entry-meta a {
        color: #5e5e5e;
        font-size: 14px;
        display: inline-block;
        line-height: 1;
    }

    .blog .entry .entry-content p {
        line-height: 24px;
    }

    .blog .entry .entry-content h3 {
        font-size: 22px;
        margin-top: 30px;
        font-weight: bold;
    }

    .blog .entry .entry-content blockquote {
        overflow: hidden;
        background-color: #fafafa;
        padding: 60px;
        position: relative;
        text-align: center;
        margin: 20px 0;
    }

    .blog .entry .entry-content blockquote p {
        color: #444444;
        line-height: 1.6;
        margin-bottom: 0;
        font-style: italic;
        font-weight: 500;
        font-size: 22px;
    }

    .blog .entry .entry-content blockquote .quote-left {
        position: absolute;
        left: 20px;
        top: 20px;
        font-size: 36px;
        color: #e7e7e7;
    }

    .blog .entry .entry-content blockquote .quote-right {
        position: absolute;
        right: 20px;
        bottom: 20px;
        font-size: 36px;
        color: #e7e7e7;
    }

    .blog .entry .entry-content blockquote::after {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 3px;
        background-color: #111111;
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .blog .entry .entry-footer {
        padding-top: 10px;
        border-top: 1px solid #e6e6e6;
    }

    .blog .entry .entry-footer i {
        color: #5e5e5e;
        display: inline;
    }

    .blog .entry .entry-footer a {
        color: #8b8b8b;
        transition: 0.3s;
    }

    .blog .entry .entry-footer a:hover {
        color: #e03a3c;
    }

    .blog .entry .entry-footer .cats {
        list-style: none;
        display: inline;
        padding: 0 20px 0 0;
        font-size: 14px;
    }

    .blog .entry .entry-footer .cats li {
        display: inline-block;
    }

    .blog .entry .entry-footer .tags {
        list-style: none;
        display: inline;
        padding: 0;
        font-size: 14px;
    }

    .blog .entry .entry-footer .tags li {
        display: inline-block;
    }

    .blog .entry .entry-footer .tags li+li::before {
        padding-right: 6px;
        color: #6c757d;
        content: ",";
    }

    .blog .entry .entry-footer .share {
        font-size: 16px;
    }

    .blog .entry .entry-footer .share i {
        padding-left: 5px;
    }

    .blog .entry-single {
        margin-bottom: 30px;
    }

    .blog .blog-author {
        padding: 20px;
        margin-bottom: 30px;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
    }

    .blog .blog-author img {
        width: 120px;
    }

    .blog .blog-author h4 {
        margin-left: 140px;
        font-weight: 600;
        font-size: 22px;
        margin-bottom: 0px;
        padding: 0;
    }

    .blog .blog-author .social-links {
        margin: 0 0 5px 140px;
    }

    .blog .blog-author .social-links a {
        color: #777777;
    }

    .blog .blog-author p {
        margin-left: 140px;
        font-style: italic;
        color: #b7b7b7;
    }

    .blog .blog-comments {
        margin-bottom: 30px;
    }

    .blog .blog-comments .comments-count {
        font-weight: bold;
    }

    .blog .blog-comments .comment {
        margin-top: 0px;
        position: relative;
    }

    .blog .blog-comments .comment .comment-img {
        width: 50px;
    }

    .blog .blog-comments .comment h5 {
        margin-left: 65px;
        font-size: 16px;
        margin-bottom: 2px;
    }

    .blog .blog-comments .comment h5 a {
        font-weight: bold;
        color: #444444;
        transition: 0.3s;
    }

    .blog .blog-comments .comment h5 a:hover {
        color: #e03a3c;
    }

    .blog .blog-comments .comment h5 .reply {
        padding-left: 10px;
        color: #111111;
    }

    .blog .blog-comments .comment time {
        margin-left: 65px;
        display: block;
        font-size: 14px;
        color: #777777;
        margin-bottom: 5px;
    }

    .blog .blog-comments .comment p {
        margin-left: 65px;
    }

    .blog .blog-comments .comment.comment-reply {
        padding-left: 40px;
    }

    .blog .blog-comments .reply-form {
        margin-top: 30px;
        padding: 30px;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
    }

    .blog .blog-comments .reply-form h4 {
        font-weight: bold;
        font-size: 22px;
    }

    .blog .blog-comments .reply-form p {
        font-size: 14px;
    }

    .blog .blog-comments .reply-form input {
        border-radius: 4px;
        padding: 20px 10px;
        font-size: 14px;
    }

    .blog .blog-comments .reply-form input:focus {
        box-shadow: none;
        border-color: #ee9293;
    }

    .blog .blog-comments .reply-form textarea {
        border-radius: 4px0;
        padding: 10px 10px;
        font-size: 14px;
    }

    .blog .blog-comments .reply-form textarea:focus {
        box-shadow: none;
        border-color: #ee9293;
    }

    .blog .blog-comments .reply-form .mb-2 {
        margin-bottom: 25px;
    }

    .blog .blog-comments .reply-form .btn-primary {
        border-radius: 4px;
        padding: 8px 20px;
        border: 0;
        background-color: #111111;
    }

    .blog .blog-comments .reply-form .btn-primary:hover {
        background-color: #e03a3c;
    }

    .blog .sidebar {
        padding: 30px;
        margin: 0 0 60px 0px;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
    }

    .blog .sidebar .sidebar-title {
        font-size: 20px;
        font-weight: 700;
        padding: 0 0 0 0;
        margin: 0 0 15px 0;
        color: #111111;
        position: relative;
    }

    .blog .sidebar .sidebar-item {
        margin-bottom: 30px;
    }

    .blog .sidebar .search-form form {
        background: #fff;
        border: 1px solid #ddd;
        padding: 3px 10px;
        position: relative;
    }

    .blog .sidebar .search-form form input[type="text"] {
        border: 0;
        padding: 4px;
        border-radius: 4px;
        width: calc(100% - 40px);
    }

    .blog .sidebar .search-form form button {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        border: 0;
        background: none;
        font-size: 16px;
        padding: 0 15px;
        margin: -1px;
        background: #e03a3c;
        color: #fff;
        transition: 0.3s;
        border-radius: 0 4px 4px 0;
    }

    .blog .sidebar .search-form form button:hover {
        background: #2b2b2b;
    }

    .blog .sidebar .categories ul {
        list-style: none;
        padding: 0;
    }

    .blog .sidebar .categories ul li+li {
        padding-top: 10px;
    }

    .blog .sidebar .categories ul a {
        color: #515151;
    }

    .blog .sidebar .categories ul a:hover {
        color: #e03a3c;
    }

    .blog .sidebar .categories ul a span {
        padding-left: 5px;
        color: #777777;
        font-size: 14px;
    }

    .blog .sidebar .recent-posts .post-item+.post-item {
        margin-top: 15px;
    }

    .blog .sidebar .recent-posts img {
        width: 100px;
        float: left;
    }

    .blog .sidebar .recent-posts h4 {
        font-size: 15px;
        margin-left: 115px;
        font-weight: bold;
    }

    .blog .sidebar .recent-posts h4 a {
        color: black;
        transition: 0.3s;
    }

    .blog .sidebar .recent-posts h4 a:hover {
        color: #e03a3c;
    }

    .blog .sidebar .recent-posts time {
        display: block;
        margin-left: 115px;
        font-style: italic;
        font-size: 14px;
        color: #777777;
    }

    .pagination {
        justify-content: center;
    }

</style>
