<div class="card card-chat overflow-hidden">
    <div class="card-body d-flex p-0 h-100">
        <div class="chat-sidebar">
            <div class="contacts-list scrollbar-overlay">
                <div class="nav nav-tabs border-0 flex-column" role="tablist" aria-orientation="vertical">
                    <?php echo $sent_users; ?>
                </div>
            </div>
        </div>
        <div class="tab-content card-chat-content">
            <?php echo $sent_chats; ?>
            <form class="chat-editor-area">
                <input class="d-none" type="file" id="chat-file-upload" /><label class="mb-0 p-1 chat-file-upload cursor-pointer" for="chat-file-upload"><span class="fas fa-paperclip"></span></label>
                <div class="btn btn-link p-0 emoji-icon" data-emoji-button="data-emoji-button"><span class="far fa-laugh-beam"></span></div>
                <div class="emojiarea-editor outline-none scrollbar" contenteditable="true"></div>
                <button class="btn btn-sm btn-send" type="submit">Send</button>
            </form>
        </div>
    </div>
</div>
