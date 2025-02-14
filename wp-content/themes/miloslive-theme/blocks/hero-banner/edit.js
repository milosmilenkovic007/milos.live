import { useBlockProps, MediaUpload, RichText } from '@wordpress/block-editor';
import { Button } from '@wordpress/components';

export default function Edit({ attributes, setAttributes }) {
    const { mainImage, chessImages, designImage, subtitle, heading, description } = attributes;

    return (
        <div {...useBlockProps({ className: "hero-banner-editor" })}>
            
            {/* Main Image Upload */}
            <MediaUpload
                onSelect={(media) => setAttributes({ mainImage: media.url })}
                allowedTypes={['image']}
                render={({ open }) => (
                    <Button onClick={open} className="upload-button">
                        {mainImage ? <img src={mainImage} alt="Main" className="main-image-preview" /> : "Upload Main Image"}
                    </Button>
                )}
            />

            {/* Chess Images Upload */}
            <div className="chess-images">
                {chessImages.map((image, index) => (
                    <MediaUpload
                        key={index}
                        onSelect={(media) => {
                            const newImages = [...chessImages];
                            newImages[index] = media.url;
                            setAttributes({ chessImages: newImages });
                        }}
                        allowedTypes={['image']}
                        render={({ open }) => (
                            <Button onClick={open} className="upload-button">
                                {image ? <img src={image} alt={`Chess ${index + 1}`} className="chess-image-preview" /> : `Upload Chess Image ${index + 1}`}
                            </Button>
                        )}
                    />
                ))}
            </div>

            {/* Design Image Upload */}
            <MediaUpload
                onSelect={(media) => setAttributes({ designImage: media.url })}
                allowedTypes={['image']}
                render={({ open }) => (
                    <Button onClick={open} className="upload-button">
                        {designImage ? <img src={designImage} alt="Design" className="design-image-preview" /> : "Upload Design Image"}
                    </Button>
                )}
            />

            {/* Text Inputs */}
            <RichText
                tagName="h2"
                value={subtitle}
                onChange={(value) => setAttributes({ subtitle: value })}
                placeholder="Enter subtitle..."
            />
            
            <RichText
                tagName="h1"
                value={heading}
                onChange={(value) => setAttributes({ heading: value })}
                placeholder="Enter heading..."
            />
            
            <RichText
                tagName="p"
                value={description}
                onChange={(value) => setAttributes({ description: value })}
                placeholder="Enter description..."
            />
        </div>
    );
}
