import { useBlockProps, RichText } from '@wordpress/block-editor';

export default function Save({ attributes }) {
    const { mainImage, chessImages, designImage, subtitle, heading, description } = attributes;

    return (
        <div {...useBlockProps.save()} className="hero-banner">
            
            {/* Main Image */}
            {mainImage && <img src={mainImage} alt="Main" className="main-image" />}

            {/* Chess Images */}
            <div className="chess-images">
                {chessImages.map((image, index) => image && <img key={index} src={image} alt={`Chess ${index + 1}`} className="chess-image" />)}
            </div>

            {/* Design Image */}
            {designImage && <img src={designImage} alt="Design" className="design-image" />}

            {/* Text Elements */}
            <RichText.Content tagName="h2" value={subtitle} className="hero-subtitle" />
            <RichText.Content tagName="h1" value={heading} className="hero-title" />
            <RichText.Content tagName="p" value={description} className="hero-description" />
        </div>
    );
}
