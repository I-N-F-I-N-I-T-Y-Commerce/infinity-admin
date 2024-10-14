const hoveredImage = (imageContainer, imageElement, imagePath) => {
    imageContainer.addEventListener('mouseenter', () => {
        imageElement.src = imagePath;
    })
}

const originalImage = (imageContainer, imageElement, imagePath) => {
    imageContainer.addEventListener('mouseleave', () => {
        imageElement.src = imagePath;
    })
}

const handleImageHovers = () => {

    const dashboard = (elementIdName) => {
        const imageContainer = document.getElementById(elementIdName);

        if (imageContainer.classList.contains('on-page')) {
            return
        }

        const imageElement =  document.getElementById(`${elementIdName}-btn`);
        hoveredImage(imageContainer, imageElement, '../assets/dashboard.png');
        originalImage(imageContainer, imageElement, '../assets/dashboard (1).png');
    }

    const transaction = (elementIdName) => {
        const imageContainer = document.getElementById(elementIdName);

        if (imageContainer.classList.contains('on-page')) {
            return
        }

        const imageElement =  document.getElementById(`${elementIdName}-btn`);
        hoveredImage(imageContainer, imageElement, '../assets/transaction.png');
        originalImage(imageContainer, imageElement, '../assets/transaction (1).png');
    }

    const feedbacks = (elementIdName) => {
        const imageContainer = document.getElementById(elementIdName);

        if (imageContainer.classList.contains('on-page')) {
            return
        }

        const imageElement =  document.getElementById(`${elementIdName}-btn`);
        hoveredImage(imageContainer, imageElement, '../assets/review.png');
        originalImage(imageContainer, imageElement, '../assets/review (1).png');
    }

    const products = (elementIdName) => {
        const imageContainer = document.getElementById(elementIdName);

        if (imageContainer.classList.contains('on-page')) {
            return
        }
        
        const imageElement =  document.getElementById(`${elementIdName}-btn`);
        hoveredImage(imageContainer, imageElement, '../assets/shoes.png');
        originalImage(imageContainer, imageElement, '../assets/shoes (1).png');
    }

    dashboard('dashboard');
    transaction('transaction');
    feedbacks('feedbacks');
    products('products');
}

const main = () => {
    handleImageHovers()
}

main()