O:41:"Symfony\Component\AssetMapper\MappedAsset":10:{s:10:"sourcePath";s:84:"C:\Users\osman\pcplus\vendor\symfony\ux-turbo\assets\dist\turbo_stream_controller.js";s:10:"publicPath";s:85:"/assets/@symfony/ux-turbo/turbo_stream_controller-a9d0d06c48318d35cc0e0aa27ef6b2dc.js";s:23:"publicPathWithoutDigest";s:52:"/assets/@symfony/ux-turbo/turbo_stream_controller.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1048:"import { Controller } from '@hotwired/stimulus';
import { connectStreamSource, disconnectStreamSource } from '@hotwired/turbo';

class default_1 extends Controller {
    initialize() {
        const errorMessages = [];
        if (!this.hasHubValue)
            errorMessages.push('A "hub" value pointing to the Mercure hub must be provided.');
        if (!this.hasTopicValue)
            errorMessages.push('A "topic" value must be provided.');
        if (errorMessages.length)
            throw new Error(errorMessages.join(' '));
        const u = new URL(this.hubValue);
        u.searchParams.append('topic', this.topicValue);
        this.url = u.toString();
    }
    connect() {
        if (this.url) {
            this.es = new EventSource(this.url);
            connectStreamSource(this.es);
        }
    }
    disconnect() {
        if (this.es) {
            this.es.close();
            disconnectStreamSource(this.es);
        }
    }
}
default_1.values = {
    topic: String,
    hub: String,
};

export { default_1 as default };
";s:6:"digest";s:32:"a9d0d06c48318d35cc0e0aa27ef6b2dc";s:13:"isPredigested";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:11:"logicalPath";s:44:"@symfony/ux-turbo/turbo_stream_controller.js";}