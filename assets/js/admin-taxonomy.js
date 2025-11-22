( function ( $ ) {
    let frame;

    function updatePreview( $wrapper, imageUrl ) {
        const preview = $wrapper.find( '.faisalwp-icon-preview' );
        if ( ! imageUrl ) {
            preview.empty();
            return;
        }
        preview.html( '<img src="' + imageUrl + '" alt="' + faisalwp_admin.icon_alt + '" style="max-width:70px;height:auto;display:block;" />' );
    }

    function openMediaUploader( $button ) {
        const $wrapper = $button.closest( '.term-icon-wrap, .form-field.term-icon-wrap' );
        frame = frame || wp.media({
            title: faisalwp_admin.upload_title,
            button: { text: faisalwp_admin.select_text },
            library: { type: [ 'image/svg+xml', 'image/png', 'image/jpeg' ] },
            multiple: false,
        });

        frame.off( 'select' );
        frame.on( 'select', function () {
            const attachment = frame.state().get( 'selection' ).first();
            if ( ! attachment ) {
                return;
            }
            const attachmentUrl = attachment.get( 'url' );
            const attachmentId = attachment.id;
            $wrapper.find( '.faisalwp-icon-id' ).val( attachmentId );
            updatePreview( $wrapper, attachmentUrl );
        } );

        frame.open();
    }

    $( document ).ready( function () {
        $( document ).on( 'click', '.faisalwp-icon-upload', function ( e ) {
            e.preventDefault();
            openMediaUploader( $( this ) );
        } );

        $( document ).on( 'click', '.faisalwp-icon-remove', function ( e ) {
            e.preventDefault();
            const $wrapper = $( this ).closest( '.term-icon-wrap, .form-field.term-icon-wrap' );
            $wrapper.find( '.faisalwp-icon-id' ).val( '0' );
            updatePreview( $wrapper, '' );
        } );
    } );
} )( jQuery );
